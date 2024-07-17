<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Otp;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ResetPasswordController extends BaseController
{
    // Reset password
    public function resetPassword(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            return $this->sendError('Unauthorized', []);
        }
        // Validate input
        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = Auth::guard('api')->user();

        // Check if current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return $this->sendError('Current password is incorrect.', []);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();
        return $this->sendResponse([], 'Password has been reset successfully.');
    }
}