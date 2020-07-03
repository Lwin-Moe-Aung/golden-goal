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
        if($estimation->odd == "L"){
            $estimation->odd = 0;
        }
        
        //odd
		if($dif < $estimation->odd){
           
            $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$estimation->odd_team)
                    ->update(['tips_result' => '-100']);
            
            $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$second)
                    ->update(['tips_result' => '+100']);

		}elseif($dif == $estimation->odd){
       
            
            if($estimation->odd_sign == "+"){
                // $rs = $estimation->odd_sign.$estimation->odd_value;
                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$estimation->odd_team)
                    ->update(['tips_result' => '+'.$estimation->odd_value]);

                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$second)
                    ->update(['tips_result' => '-'.$estimation->odd_value]);
            }elseif($estimation->odd_sign == "-"){
                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$estimation->odd_team)
                    ->update(['tips_result' => '-'.$estimation->odd_value]);

                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$second)
                    ->update(['tips_result' => '+'.$estimation->odd_value]);
            }elseif($estimation->odd_sign == "="){

                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','!=', null)
                    ->update(['tips_result' => '=']);
            }
			
			
		}elseif($dif > $estimation->odd){
			$tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$estimation->odd_team)
                    ->update(['tips_result' => '+100']);
            
            $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$second)
                    ->update(['tips_result' => '-100']);
        }
        


        //for over under
        if($estimation->over_under_odd != null){
            
            $total = (int)$estimation->home_final_result + (int)$estimation->away_final_result;
            if($total < $estimation->over_under_odd){
                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('over','=',"yes")
                    ->where('under','=',"no")
                    ->update(['over_under_result' => '-100']);
            
                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('under','=',"yes")
                    ->where('over','=',"no")
                    ->update(['over_under_result' => '+100']);
            }elseif($total == $estimation->over_under_odd){

                if($estimation->over_under_sign == "+"){
                    
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('over','=',"yes")
                        ->where('under','=',"no")
                        ->update(['over_under_result' => '+'.$estimation->over_under_odd_value]);
            
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('under','=',"yes")
                        ->where('over','=',"no")
                        ->update(['over_under_result' => '-'.$estimation->over_under_odd_value]);
                }elseif($estimation->over_under_sign == "-"){
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('over','=',"yes")
                        ->where('under','=',"no")
                        ->update(['over_under_result' => '-'.$estimation->over_under_odd_value]);
            
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('under','=',"yes")
                        ->where('over','=',"no")
                        ->update(['over_under_result' => '+'.$estimation->over_under_odd_value]);

                }elseif($estimation->over_under_sign == "="){
                    
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('under','=',"yes")
                        ->update(['over_under_result' => '=']); 

                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('over','=',"yes")
                        ->update(['over_under_result' => '=']); 
                }  
            }elseif($total > $estimation->over_under_odd){

                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('over','=',"yes")
                    ->where('under','=',"no")
                    ->update(['over_under_result' => '+100']);
            
                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('under','=',"yes")
                    ->where('over','=',"no")
                    ->update(['over_under_result' => '-100']);
            }
        }
        return $this->sendResponse($estimation, 'Successfully add result!');


    }
    
}