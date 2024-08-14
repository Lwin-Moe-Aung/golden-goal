<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\SubscriptionPlan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class SubscriptionPlanController extends BaseController
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
        $result = SubscriptionPlan::all();

        foreach ($result as $index => $item) {
          $item->desc = json_decode($item->desc, true);
        }
        
        return $this->sendResponse($result, 'Subscription plans are fetch successfully');
    }
}