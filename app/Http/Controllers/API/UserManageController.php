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


class UserManageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateUser()
    {
        
        $firastName = "GG";
        $lastName = str_random(5);
        
        $username = $firastName . "-" . $lastName;
        $userRows  = User::whereRaw("username REGEXP '^{$username}(-[0-9]*)?$'")->get();
        $countUser = count($userRows) + 1;

        $username =  ($countUser > 1) ? "{$username}-{$countUser}" : $username;
        $password =  Str::slug(str_random(8));

        $user = new User;
        $user->username = $username;
        $user->password = Hash::make($password);
        $user->role = "User";
        $user->start_date = Carbon::now();
        $user->end_date = Carbon::now()->addDays(30);
        $user->save();

        $data = [
            'user_id' => $user->id,
            'username' => $username,
            'password'    => $password,
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
        
        $user = User::find($request->user_id);
        $user->start_date = Carbon::parse($request->start_date)->format('Y-m-d H:i:s');
        $user->end_date = Carbon::parse($request->end_date)->format('Y-m-d H:i:s');
        $user->save();

        return $this->sendResponse(" ","successfully update time limit");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        $product->delete();


        return $this->sendResponse($product->toArray(), 'Product deleted successfully.');
    }
}