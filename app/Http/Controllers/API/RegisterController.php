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



class RegisterController extends BaseController
{

    protected $smsPohService;
    protected $maxOtpRequests = 5; // Maximum OTP requests allowed
    protected $otpRequestCooldown = 15; // Cooldown period in minutes

    public function __construct(SmsPohService $smsPohService)
    {
        $this->smsPohService = $smsPohService;
    }

    // Registration method
    public function register(Request $request)
    {
        // Validate input
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'phone_number' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
            'verify_key' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // Check if the phone number is already registered but not verified
        $user = User::where('phone_number', $request->phone_number)->first();
        $otp = Otp::where('unique_key', $request->verify_key)->first();
        if(!$user) return $this->sendError('User not found!.', []);
        if(!$otp) return $this->sendError('Verify key is not found!', []);

        // if ($this->hasTooManyOtpRequests($user)) {
        //     return $this->sendError('Too many OTP requests. Please try again later.', []);
        // }

        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->token = $user->createToken('user Access Token')->accessToken;

        return $this->sendResponse($user, 'Registration successful');
        
   
    }
    
    // // Method to resend OTP
    // public function resendOtp(Request $request)
    // {
    //     // Validate input
    //     $validator = Validator::make($request->all(), [
    //         'phone_number' => 'required|string',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['errors' => $validator->errors()], 422);
    //     }

    //     // Check if the phone number is already registered but not verified
    //     $user = User::where('phone_number', $request->phone_number)->first();

    //     if (!$user) {
    //         return response()->json(['message' => 'Phone number not found.'], 404);
    //     }

    //     if ($user->is_verified) {
    //         return response()->json(['message' => 'Phone number already verified.'], 400);
    //     }

    //     if ($this->hasTooManyOtpRequests($user)) {
    //         return response()->json(['message' => 'Too many OTP requests. Please try again later.'], 429);
    //     }

    //     // Generate OTP
    //     $otp_code = rand(100000, 999999);
    //     Otp::create([
    //         'user_id' => $user->id,
    //         'otp_code' => $otp_code,
    //         'expires_at' => Carbon::now()->addMinutes(10),
    //         'action' => 'registration',
    //     ]);

    //     // Update OTP request count and time
    //     $user->update([
    //         'otp_request_count' => $user->otp_request_count + 1,
    //         'last_otp_request_at' => Carbon::now()
    //     ]);

    //     // Send OTP
    //     $this->smsPohService->sendOtp($user->phone_number, $otp_code);

    //     return response()->json(['message' => 'OTP resent. Please verify your OTP.']);
    // }

    // // checking too many time request for otp
    // protected function hasTooManyOtpRequests(User $user)
    // {
    //     $lastRequest = $user->last_otp_request_at;
    //     if ($lastRequest && $lastRequest->diffInMinutes(Carbon::now()) < $this->otpRequestCooldown) {
    //         if ($user->otp_request_count >= $this->maxOtpRequests) {
    //             return true;
    //         }
    //     } else {
    //         // Reset OTP request count after cooldown period
    //         $user->update(['otp_request_count' => 0]);
    //     }
    //     return false;
    // }

    // // OTP verification method
    // public function verifyOtp(Request $request)
    // {
    //    // Validate input
    //    $validator = Validator::make($request->all(), [
    //        'phone_number' => 'required|string',
    //        'otp_code' => 'required|string',
    //    ]);

    //    if ($validator->fails()) {
    //        return response()->json(['errors' => $validator->errors()], 422);
    //    }

    //    // Check if OTP is valid
    //    $otp = Otp::where('otp_code', $request->otp_code)
    //        ->where('expires_at', '>', Carbon::now())
    //        ->where('is_verified', false)
    //        ->whereHas('user', function($query) use ($request) {
    //            $query->where('phone_number', $request->phone_number);
    //        })
    //        ->first();

    //    if (!$otp) {
    //        return response()->json(['message' => 'Invalid or expired OTP.'], 400);
    //    }

    //    // Mark OTP as verified
    //    $otp->is_verified = true;
    //    $otp->save();

    //    // Find the user
    //    $user = $otp->user;
    //    $user->is_verified = true;
    //    $user->save();

    //    // Generate access token for the user
    //    $token = $user->createToken('user Access Token')->accessToken;

    //    return response()->json(['message' => 'OTP verified successfully.', 'token' => $token]);
    // }
}