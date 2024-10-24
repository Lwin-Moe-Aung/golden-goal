<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\SubscriptionPlan;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

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

    public function adminSubscribeForUser(Request $request)
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
          $error = "Unauthorized user";
          return $this->sendError($error,'',401);
        }

        $userId = $request->input('userId');
        $plan_id = $request->input('planId');
        $duration = $request->input('duration');

        $user = User::findOrFail($userId);
        $user->subscription_plan_id = $plan_id;
        $user->subscription_end_date = Carbon::now()->addDays($duration);
        $user->save();
        
        return $this->sendResponse($user, 'Admin subscribe for user successfully');
    }

}