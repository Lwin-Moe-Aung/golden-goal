<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
use Carbon\Carbon;

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

    //logout
    public function logout(Request $request)
    {
        // dd(Auth::guard('api')->user()->AauthAcessToken());
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
}
