<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\SubscriptionPlan;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;


class AuthController extends BaseController
{

    //login
    public function login(Request $request)
    {
        // return "ssssss";
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $credentials = request(['username', 'password']);
        if(!Auth::attempt($credentials)){
            $error = "Unauthorized";
            return $this->sendError($error, 401);
        }

        $user = User::
            where('id', '=', Auth::user()->id)
            ->get();

        if($user[0]->end_date <= Carbon::now()->toDateTimeString() && Auth::user()->role != "Admin"){
            $error = "expired end date";
            $data = [
                "end_date" => $user[0]->end_date,
            ];

            return $this->sendError($error,$data, 201);
        }
        $user = Auth::user();
        $success['user_id'] = $user->id;
        $success['name'] = $user->username;
        $success['profile_photo'] = $user->profile_photo;
        $success['profile_id'] = $user->profile_id;
        $success['member_type'] = $user->member_type;
        $success['start_date'] = $user->start_date;
        $success['end_date'] = $user->end_date;
        $success['token'] =  $user->createToken('token')->accessToken;

        return $this->sendResponse($success,"login success");
    }

    // Login method for user
    public function userLogin(Request $request)
    {
        // Validate input
      $validator = Validator::make($request->all(), [
        'phone_number' => 'required|string',
        'password' => 'required|string|min:6',
      ]);

      if ($validator->fails()) {
          return $this->sendError('Validation Error.', $validator->errors());
      }

      // Check if the user exists
      $user = User::where('phone_number', $request->phone_number)->first();

      if (!$user) {
          return $this->sendError('Phone number is not registered.', []);
      }
      // Attempt to log the user in
      if (!Auth::attempt(['phone_number' => $request->phone_number, 'password' => $request->password])) {
          return $this->sendError('Password incorrect!', []);
      }

      // Generate access token
      $token = $user->createToken('user Access Token')->accessToken;

      // Format response data
      $data = [
          'user_id' => $user->id,
          'name' => $user->username,
          'subscription_plan_id' => $user->subscription_plan_id,
          'subscription_end_date' => $user->subscription_end_date,
          'token' => $token,
      ];
      return $this->sendResponse($data, 'login success');
    }

    //logout
    public function logout(Request $request)
    {
      if (Auth::guard('api')->check()) {
        Auth::guard('api')->user()->AauthAcessToken()->delete();
        $error = "successfully logout";
        return $this->sendResponse($error, "successfully logout");
      }
      $error = "Unauthorized user";
      return $this->sendError($error,'',201);

    }

    //getuser
    public function getUser(Request $request)
    {
        //$id = $request->user()->id;
        $user = $request->user();
        if($user){
            return $this->sendResponse($user);
        }
        else{
            $error = "user not found";
            return $this->sendResponse($error);
        }
    }

    //get profile
    public function getProfile(Request $request)
    {
      if (!Auth::guard('api')->check()) {
          $error = "Unauthorized user";
          return $this->sendError($error, '', 401);
      }

      $user = Auth::guard('api')->user();
      $planData = null;

      if ($user->subscription_plan_id !== null) {
          $endDate = Carbon::parse($user->subscription_end_date);
          $today = Carbon::now();
          $daysRemaining = $today->diffInDays($endDate, false);
          $plan = SubscriptionPlan::findOrFail($user->subscription_plan_id);
          // dd($plan);
          $count = (int)$plan->duration - (int)$daysRemaining;

          $plan_remaining = "{$count}/{$plan->duration} days";
          $planData = [
            'id'=> $plan->id,
            "title"=> $plan->title,
            "total_amount"=> $plan->total_amount,
            "duration" => $plan->duration,
            "use_count" => (string)$count,
            "remaining"=> $plan_remaining,
          ];
      }

      $userData = [
        'id' => $user->id,
        'name' => $user->username,
        'profile_photo' => $user->profile_photo,
        'phone_number' => $user->phone_number
      ];
      return response()->json([
          "user" => $userData,
          "plan" => $planData
      ]);
    }

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

    public function getUserByPhone(Request $request)
    {
      if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
        $error = "Unauthorized user";
        return $this->sendError($error,'',401);
      }
      $user = User::where('phone_number', $request->input('phone_number'))->first();
      
      if(!$user){
        return $this->sendError("User not found!",'',400);
      }
      $data = [
        'id' => $user->id,
        'username' => $user->username,
        'phone_number' => $user->phone_number,
        'subscription_plan_id' => $user->subscription_plan_id,
        'subscription_end_date' => $user->subscription_end_date
      ];

      return $this->sendResponse($data, 'User data!'); 
    }

}
