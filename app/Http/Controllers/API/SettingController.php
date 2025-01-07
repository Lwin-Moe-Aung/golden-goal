<?php

namespace App\Http\Controllers\API;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;

class SettingController extends BaseController
{
    /**
     * Display a listing of the settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // find the first row in settings table
      $settings = Setting::first();
      return $this->sendResponse($settings, 'Settings retrieved successfully.');
    }
    /**
     * Update the specified setting in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
        $error = "Unauthorized user";
        return $this->sendError($error,'',202);
      }
      // Validate input
      $validator = Validator::make($request->all(), [
        'is_active_otp_service' => 'required|boolean',
        'is_force_update' => 'required|boolean',
        'version' => 'required|string',

      ]);

      if ($validator->fails()) {
          return $this->sendError('Validation Error.', $validator->errors());
      }
      // drop all row in settings table
      Setting::truncate();
      // create new row in settings table
      $setting = Setting::create($request->all());
      return $this->sendResponse($setting, 'Setting updated successfully.');
    }
}