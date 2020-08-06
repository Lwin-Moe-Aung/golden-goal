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
use Illuminate\Support\Facades\Storage;
use Image;

class UserManageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateUser(Request $request)
    {
       
        if (Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
      
        $firastName = "GG";
        $lastName = str_random(10);
        
        $username = $firastName . "-" . $lastName;
        $userRows  = User::whereRaw("username REGEXP '^{$username}(-[0-9]*)?$'")->get();
        $countUser = count($userRows) + 1;

        $username =  ($countUser > 1) ? "{$username}-{$countUser}" : $username;
        $password =  Str::slug(str_random(10));
        
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
        $user->profile_id = Carbon::now()->timestamp;
        $user->member_type = $request->member_type;
        $user->save();

        $data = [
            'user_id' => $user->id,
            'username' => $username,
            'password'    => $password,
            'member_type' => $user->member_type,
            'profile_id' => $user->profile_id,
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
            ->Where('username','=', $request->input("search_value"))
            ->orWhere('profile_id','=', $request->input("search_value"))
            ->where('role', '!=', 'Admin')
            ->paginate($request->input("per_page"));

        if (is_null($users)) {
            return $this->sendError('Users not found.');
        }

        return $this->sendResponse($users->toArray(), 'Users retrieved successfully.');
    }

     /**
     * get user Lists.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userProfileEdit(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        // dd($request->user_name);
        $users = User::find( $request->user_id);
            

        $users->username = $request->user_name;

        if($request->hasFile('profile_photo')) {
            $icon_name = Str::random(20);
            $file = $request->file('profile_photo');

            $filenametostore = $icon_name.'.'.$file->getClientOriginalExtension();
            $icon_path = '/'."User_profiles".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filenametostore;
            
            Storage::disk('public')->put($icon_path, file_get_contents($file));
            

            //Resize image here
            $thumbnail_name = 'thumbnail_'.Str::random(20);

            $filethumb = $thumbnail_name.'.'.$file->getClientOriginalExtension();
            $icon_thumb_nail_path = '/'."User_profiles".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filethumb;
            
            $icon_thumb_nail = public_path('storage/'.$icon_thumb_nail_path);
            $img = Image::make($request->file('profile_photo')->getRealPath())->resize(200,200)->save($icon_thumb_nail);
            $users->profile_photo = $icon_thumb_nail_path;
        }
        $users->save();

        return $this->sendResponse($users->toArray(), 'Users profile Updated successfully.');
    }



     /**
     * facebook login
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fbLogin(Request $request)
    {
        
        $user = User::select('*')
                ->where('fb_id','=',$request->fb_id)
                ->get();
        $username = explode("-", $request->username);
        $username = $username[0];
        if(count($user) <= 0){
            $user = new User();
            $user->username = $username;
            
            $user->role = "User";
            $user->start_date = Carbon::now();
            $user->end_date = Carbon::parse(Carbon::now())->addDays(90);
            $user->member_type = 1;
            $user->password = bcrypt($request->password);
            $user->fb_id = $request->fb_id;
            $user->profile_id = Carbon::now()->timestamp;
            $user->profile_photo = $request->profile_photo;
            if(isset($request->profile_photo)){
                $poster_path = '/'."User_profiles".'/' . date("Y") . "/" . date("m") . "/" . date("d") . "/";
                $photo_name = Str::random(20);
                $cover_file_path = $poster_path . $photo_name . ".jpg";
                $file_contents = file_get_contents($request->profile_photo);
                Storage::disk('public')->put($cover_file_path, $file_contents);
                $user->profile_photo = $cover_file_path;
            }
            $user->save();
        }else{
            
            $user = User::find($user[0]->id);
            $user->username = $username;
            
            $user->fb_id = $request->fb_id;
            
            $user->save();
        }
        
        $credentials = request(['fb_id', 'password']);
        
        if(!Auth::attempt($credentials)){
            $error = "Unauthorized";
            return $this->sendError($error, 401);
        }
        $user = Auth::user(); 
        
        $success['user_id'] = $user->id;
        $success['name'] = $user->username;
        $success['profile_photo'] = $user->profile_photo;
        $success['profile_id'] = $user->profile_id;
        $success['token'] =  $user->createToken('token')->accessToken;
        
        return $this->sendResponse($success,"login success");
    }
}