<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Product;
use Validator;
use Illuminate\Support\Str;
use App\User;
use App\Tip;
use App\Estimation;


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

    public function addResult(Request $request){
        $estimation = Estimation::find($request->estimation_id);
        $estimation->home_final_result = $request->home_final_result;
        $estimation->away_final_result = $request->away_final_result;
        $estimation->save();

        $a = $request->home;
		$b = $request->away;
		$c = $request->main_team;

		
		if($estimation->home == $estimation->odd_team){
			$dif = $estimation->home_final_result - $estimation->away_final_result;
			$second = $estimation->away;
		}else{
			$dif = $estimation->away_final_result - $estimation->home_final_result;
			$second = $estimation->home;
		}

		if($dif < $estimation->odd){
			return $estimation->odd_team." lose but ". $second."  win ";

		}elseif($dif == $estimation->odd){
			
			return $estimation->odd_team." = ".$estimation->odd_value." but ".$second." = ". $estimation->odd_value;
			
		}elseif($dif > $estimation->odd){
			return $estimation->odd_team ." win but ". $second."  lose ";
		}

        // return $this->sendResponse($estimation, 'Successfully add result!');


    }
    
}