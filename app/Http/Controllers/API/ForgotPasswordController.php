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
use App\Services\SmsPohService;

class ForgotPasswordController extends BaseController
{
    // protected $smsPohService;
    // protected $maxOtpRequests = 5; // Maximum OTP requests allowed
    // protected $otpRequestCooldown = 15; // Cooldown period in minutes

    // public function __construct(SmsPohService $smsPohService)
    // {
    //     $this->smsPohService = $smsPohService;
    // }

    // // Send OTP for forgot password
    // public function sendOtp(Request $request)
    // {
    //     // Validate input
    //     $validator = Validator::make($request->all(), [
    //         'phone_number' => 'required|string',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['errors' => $validator->errors()], 422);
    //     }

    //     // Check if the phone number is registered
    //     $user = User::where('phone_number', $request->phone_number)->first();

    //     if (!$user) {
    //         return response()->json(['message' => 'Phone number not found.'], 404);
    //     }

    //     if ($this->hasTooManyOtpRequests($user)) {
    //         return response()->json(['message' => 'Too many OTP requests. Please try again later.'], 429);
    //     }

    //     // Generate OTP
    //     $otp_code = rand(100000, 999999);
    //     Otp::create([
    //         'user_id' => $user->id,
    //         'otp_code' => $otp_code,
    //         'expires_at' => Carbon::now()->addMinutes(2),
    //         'action' => 'forgot_password',
    //     ]);

    //     // Update OTP request count and time
    //     $user->update([
    //         'otp_request_count' => $user->otp_request_count + 1,
    //         'last_otp_request_at' => Carbon::now()
    //     ]);

    //     // Send OTP
    //     $this->smsPohService->sendOtp($user->phone_number, $otp_code);

    //     return response()->json(['message' => 'OTP sent. Please verify your OTP.']);
    // }

    // // Verify OTP for forgot password
    // public function verifyOtp(Request $request)
    // {
    //     // Validate input
    //     $validator = Validator::make($request->all(), [
    //         'phone_number' => 'required|string',
    //         'otp_code' => 'required|string',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['errors' => $validator->errors()], 422);
    //     }

    //     // Check if OTP is valid
    //     $otp = Otp::where('otp_code', $request->otp_code)
    //         ->where('expires_at', '>', Carbon::now())
    //         ->where('is_verified', false)
    //         ->whereHas('user', function($query) use ($request) {
    //             $query->where('phone_number', $request->phone_number);
    //         })
    //         ->first();

    //     if (!$otp) {
    //         return response()->json(['message' => 'Invalid or expired OTP.'], 400);
    //     }

    //     // Mark OTP as verified
    //     $otp->is_verified = true;
    //     $otp->save();

    //     return response()->json(['message' => 'OTP verified successfully.']);
    // }

    // Reset password
    public function forgotPassword(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
            'verify_key' => 'required',

        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // Check if OTP is valid
        $otp = Otp::where('unique_key', $request->verify_key)
            ->where('is_verified', true)
            ->whereHas('user', function($query) use ($request) {
                $query->where('phone_number', $request->phone_number);
            })
            ->first();

        if (!$otp) {
            return $this->sendError('Invalid OTP data.', []);
        }

        // Reset password
        $user = $otp->user;
        $user->password = Hash::make($request->password);
        $user->save();
        return $this->sendResponse($user, 'Password reset successfully.');
    
    }
}
