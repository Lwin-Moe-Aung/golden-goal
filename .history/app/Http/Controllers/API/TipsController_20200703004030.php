<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Product;
use Validator;
use Illuminate\Support\Str;
use App\User;
use App\Tip;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class TipsController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function playTips(Request $request)
    {

        $tip = new Tip;
        $tip->user_id = $request->user_id;
        $tip->estimation_id = $request->estimation_id;
        $tip->play_team_id = $request->play_team_id;
        $tip->over = $request->over;
        $tip->under = $request->under;
    
        $tip->save();

       

        return $this->sendResponse($tip, 'Successfully play tips!');
    }
    
}