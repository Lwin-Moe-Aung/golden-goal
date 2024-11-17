<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use App\Otp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Laravel\Passport\Passport;
use App\Services\SmsPohService;


class OtpController extends BaseController
{

    protected $smsPohService;
    protected $maxOtpRequests = 5; // Maximum OTP requests allowed
    protected $otpRequestCooldown = 15; // Cooldown period in minutes

    public function __construct(SmsPohService $smsPohService)
    {
        $this->smsPohService = $smsPohService;
    }

    // Send OTP for forgot password
    public function sendOtp(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|string',
            'type' => 'required|string'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 200);
        }

        // Check if the phone number is registered
        $user = User::where('phone_number', $request->phone_number)->first();

        if ($request->type == 'REGISTER') {
            if($user){
              return $this->sendError('Your number is already registered.',[], 200);
            }
            // Proceed with normal registration if user does not exist
            $newUser = User::create([
                'phone_number' => $request->phone_number,
                'role' => 'User',
            ]);
            // Generate OTP
            $otp_code = rand(100000, 999999);
            Otp::create([
                'user_id' => $newUser->id,
                'otp_code' => $otp_code,
                'expires_at' => Carbon::now()->addMinutes(1),
                'action' => 'registration',
            ]);

            // Update OTP request count and time
            $newUser->update([
                'otp_request_count' => 1,
                'last_otp_request_at' => Carbon::now()
            ]);

            // Send OTP
            $this->smsPohService->sendOtp($newUser->phone_number, $otp_code);

        }else{
            if(!$user){
              return $this->sendError('Please create account first!',[], 200);
            }
            if ($this->hasTooManyOtpRequests($user)) {
                return $this->sendError('Too many OTP requests. Please try again later.', [], 200);
            }
    
            // Generate OTP
            $otp_code = rand(100000, 999999);
            Otp::create([
                'user_id' => $user->id,
                'otp_code' => $otp_code,
                'expires_at' => Carbon::now()->addMinutes(1),
                'action' => 'forgot_password',
            ]);
    
            // Update OTP request count and time
            $user->update([
                'otp_request_count' => $user->otp_request_count + 1,
                'last_otp_request_at' => Carbon::now()
            ]);
    
            // Send OTP
            $this->smsPohService->sendOtp($user->phone_number, $otp_code);
        }
        return $this->sendResponse([], "OTP sent. Please verify your OTP.");
    }

    // Verify OTP for forgot password
    public function verifyOtp(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|string',
            'otp_code' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // Check if OTP is valid
        $otp = Otp::where('otp_code', $request->otp_code)
            ->where('expires_at', '>', Carbon::now())
            ->where('is_verified', false)
            ->whereHas('user', function($query) use ($request) {
                $query->where('phone_number', $request->phone_number);
            })
            ->first();

        if (!$otp) {
            return $this->sendError('Invalid or expired OTP.',[]);
        }

        // Mark OTP as verified
        $otp->is_verified = true;
        $otp->unique_key = (string) \Str::uuid();
        $otp->save();

        return $this->sendResponse(['verifyKey' => $otp->unique_key], 'OTP verified successfully.');
    }

    // Reset password
    public function resetPassword(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|string',
            'otp_code' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Check if OTP is valid
        $otp = Otp::where('otp_code', $request->otp_code)
            ->where('expires_at', '>', Carbon::now())
            ->where('is_verified', true)
            ->whereHas('user', function($query) use ($request) {
                $query->where('phone_number', $request->phone_number);
            })
            ->first();

        if (!$otp) {
            return response()->json(['message' => 'Invalid or expired OTP.'], 400);
        }

        // Reset password
        $user = $otp->user;
        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json(['message' => 'Password reset successfully.']);
    }

    protected function hasTooManyOtpRequests(User $user)
    {
        $lastRequest = $user->last_otp_request_at;
        if ($lastRequest && $lastRequest->diffInMinutes(Carbon::now()) < $this->otpRequestCooldown) {
            if ($user->otp_request_count >= $this->maxOtpRequests) {
                return true;
            }
        } else {
            // Reset OTP request count after cooldown period
            $user->update(['otp_request_count' => 0]);
        }
        return false;
    }
}