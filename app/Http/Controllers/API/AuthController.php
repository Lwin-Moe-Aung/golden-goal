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

        $user = User::where('start_date', '<', Carbon::now())
            ->where('end_date', '>' , Carbon::now())
            ->where('id', '=', Auth::user()->id)
            ->get();

        if(count($user) < 1 && Auth::user()->role != "Admin"){
            $error = "Unauthorized";
            return $this->sendError($error, 401);
        }
        $user = Auth::user(); 
        $success['token'] =  $user->createToken('token')->accessToken;
        
        return $this->sendResponse($success,"login success");
    }

    //logout
    public function logout(Request $request)
    {
        
        if (Auth::guard('api')->check()) {
            Auth::guard('api')->user()->AauthAcessToken()->delete();
            $error = "successfully logout";
            return $this->sendError($error, 401);
        }
        
        
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