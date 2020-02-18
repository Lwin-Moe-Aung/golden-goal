<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Product;
use Validator;
use Illuminate\Support\Str;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class UserManageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateUser(Request $request)
    {
       
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $firastName = "GG";
        $lastName = str_random(5);
        
        $username = $firastName . "-" . $lastName;
        $userRows  = User::whereRaw("username REGEXP '^{$username}(-[0-9]*)?$'")->get();
        $countUser = count($userRows) + 1;

        $username =  ($countUser > 1) ? "{$username}-{$countUser}" : $username;
        $password =  Str::slug(str_random(8));
        
        if($request->member_type == 1){
            $end_date = Carbon::now()->addDays(90);
        }elseif($request->member_type == 2){
            $end_date = Carbon::now()->addDays(180);
        }else{
            $end_date = Carbon::now()->addDays(360);
        }
        

        $user = new User;
        $user->username = $username;
        $user->password = Hash::make($password);
        $user->role = "User";
        $user->start_date = Carbon::now();
        $user->end_date = $end_date;
        $user->member_type = $request->member_type;
        $user->save();

        $data = [
            'user_id' => $user->id,
            'username' => $username,
            'password'    => $password,
            'member_type' => $user->member_type,
            'start_date' => Carbon::parse($user->start_date)->format('Y-m-d H:i:s'),
            'end_date' => Carbon::parse($user->end_date)->format('Y-m-d H:i:s'),
            
        ];

        return $this->sendResponse($data, 'New user  generate successfully.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function limitMemberTime(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $user = User::find($request->user_id);
        
        if($user->end_date >= Carbon::now()->toDateTimeString()){
            $end_date = $user->end_date;
        }else{
            $end_date = Carbon::now();
        }

        if($request->member_type == 1){
            $end_date = Carbon::parse($end_date)->addDays(90);
        }elseif($request->member_type == 2){
            $end_date = Carbon::parse($end_date)->addDays(180);
        }else{
            $end_date = Carbon::parse($end_date)->addDays(360);
        }
        
        $user->member_type = $request->member_type;
        $user->start_date = Carbon::parse($request->start_date)->format('Y-m-d H:i:s');
        $user->end_date = Carbon::parse($end_date)->format('Y-m-d H:i:s');
        $user->save();
       
        $data = [
            'start_date' => $user->start_date,
            'end_date' => $user->end_date,
            'status' => $user->member_type,
        ];
        return $this->sendResponse($data,"successfully update time limit");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $product = Product::find($id);
        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }


        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $product->name = $input['name'];
        $product->detail = $input['detail'];
        $product->save();


        return $this->sendResponse($product->toArray(), 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $product->delete();
        return $this->sendResponse($product->toArray(), 'Product deleted successfully.');
    }

     /**
     * get user profile.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getProfile($id)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $user = User::find($id);
        if (is_null($user)) {
            return $this->sendError('User not found.');
        }

        return $this->sendResponse($user->toArray(), 'User retrieved successfully.');
    }

    /**
     * get user Lists.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUserList(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $users = DB::table('users')
            ->where('role', '!=', 'Admin')
            ->paginate($request->input("per_page"));

        if (is_null($users)) {
            return $this->sendError('Users not found.');
        }

        return $this->sendResponse($users->toArray(), 'Users retrieved successfully.');
    }
}