<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\PaymentMethod;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class PaymentMethodController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLists(Request $request)
    {
        if (!Auth::guard('api')->check()) {
          return $this->sendError('Unauthorized', []);
        }
        $result = PaymentMethod::all();
        
        return $this->sendResponse($result, 'Payment methods are fetch successfully');
    }
}