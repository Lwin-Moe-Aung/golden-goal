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
use App\League;
use App\Team;


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
    public function playTipsOdd(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

        $tip = Tip::where('user_id',$request->user_id)->where('estimation_id',$request->estimation_id)->first();
        if($tip != null){
            $tip->user_id = $request->user_id;
            $tip->estimation_id = $request->estimation_id;
            $tip->play_team_id = $request->play_team_id;
            
        }else{
            $tip = new Tip;
            $tip->user_id = $request->user_id;
            $tip->estimation_id = $request->estimation_id;
            $tip->play_team_id = $request->play_team_id;
           
        }
        $tip->save();
        return $this->sendResponse($tip, 'Successfully play tips odd!');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function playTipsOverUnder(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

        $tip = Tip::where('user_id',$request->user_id)->where('estimation_id',$request->estimation_id)->first();
        if($tip != null){
            $tip->user_id = $request->user_id;
            $tip->estimation_id = $request->estimation_id;
            
            $tip->over = $request->over;
            $tip->under = $request->under;
        }else{
            $tip = new Tip;
            $tip->user_id = $request->user_id;
            $tip->estimation_id = $request->estimation_id;
            $tip->over = $request->over;
            $tip->under = $request->under;
        }
        $tip->save();
        return $this->sendResponse($tip, 'Successfully play tips Over Under!');
    }

    public function addResult(Request $request){

        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

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

            $this->calculateUserRank($request->estimation_id, $estimation->odd_team, 100, '-');

            $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$second)
                    ->update(['tips_result' => '+100']);

            $this->calculateUserRank($request->estimation_id, $second,100,'+');

		}elseif($dif == $estimation->odd){
       
            
            if($estimation->odd_sign == "+"){
                // $rs = $estimation->odd_sign.$estimation->odd_value;
                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$estimation->odd_team)
                    ->update(['tips_result' => '+'.$estimation->odd_value]);

                $this->calculateUserRank($request->estimation_id, $estimation->odd_team, $estimation->odd_value, '+');

                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$second)
                    ->update(['tips_result' => '-'.$estimation->odd_value]);

                $this->calculateUserRank($request->estimation_id, $second, $estimation->odd_value,'-');

            }elseif($estimation->odd_sign == "-"){
                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$estimation->odd_team)
                    ->update(['tips_result' => '-'.$estimation->odd_value]);

                $this->calculateUserRank($request->estimation_id, $estimation->odd_team, $estimation->odd_value, '-');

                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$second)
                    ->update(['tips_result' => '+'.$estimation->odd_value]);

               
                $this->calculateUserRank($request->estimation_id, $second, $estimation->odd_value, '+');
                
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

            $this->calculateUserRank($request->estimation_id, $estimation->odd_team, 100, '+');

            $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('play_team_id','=',$second)
                    ->update(['tips_result' => '-100']);

            $this->calculateUserRank($request->estimation_id, $second, 100, '-');
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

                $this->calculateUserRankOverUnder($request->estimation_id, 'yes', 'no', 100, '-');

                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('under','=',"yes")
                    ->where('over','=',"no")
                    ->update(['over_under_result' => '+100']);

                $this->calculateUserRankOverUnder($request->estimation_id, 'no', 'yes', 100, '+');

            }elseif($total == $estimation->over_under_odd){

                if($estimation->over_under_sign == "+"){
                    
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('over','=',"yes")
                        ->where('under','=',"no")
                        ->update(['over_under_result' => '+'.$estimation->over_under_odd_value]);
                    
                    $this->calculateUserRankOverUnder($request->estimation_id, 'yes', 'no', $estimation->over_under_odd_value, '+');
                    
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('under','=',"yes")
                        ->where('over','=',"no")
                        ->update(['over_under_result' => '-'.$estimation->over_under_odd_value]);
                    
                    $this->calculateUserRankOverUnder($request->estimation_id, 'no', 'yes', $estimation->over_under_odd_value, '-');

                }elseif($estimation->over_under_sign == "-"){
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('over','=',"yes")
                        ->where('under','=',"no")
                        ->update(['over_under_result' => '-'.$estimation->over_under_odd_value]);

                    $this->calculateUserRankOverUnder($request->estimation_id, 'yes', 'no', $estimation->over_under_odd_value, '-');
                    
                    $tips = Tip::select('*')
                        ->where('estimation_id','=',$request->estimation_id)
                        ->where('under','=',"yes")
                        ->where('over','=',"no")
                        ->update(['over_under_result' => '+'.$estimation->over_under_odd_value]);

                    $this->calculateUserRankOverUnder($request->estimation_id, 'no', 'yes', $estimation->over_under_odd_value, '+');

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
            
                $this->calculateUserRankOverUnder($request->estimation_id, 'yes', 'no', 100, '+');

                $tips = Tip::select('*')
                    ->where('estimation_id','=',$request->estimation_id)
                    ->where('under','=',"yes")
                    ->where('over','=',"no")
                    ->update(['over_under_result' => '-100']);
                
                $this->calculateUserRankOverUnder($request->estimation_id, 'no', 'yes', 100, '-');

            }
        }
        return $this->sendResponse([], 'Successfully add result and calculated the user rank');


    }

    public function calculateUserRank($estimation_id, $team_id, $value, $sign ){
        
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        $user_id  = DB::table('tips')
            ->where('estimation_id','=',$estimation_id)
            ->where('play_team_id','=',$team_id)
            ->pluck('user_id');

        $this->rankCalculator($user_id, $value, $sign);
        return true;
       
    }

    public function calculateUserRankOverUnder($estimation_id, $over, $under, $value, $sign){

        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        $user_id  = DB::table('tips')
            ->where('estimation_id','=',$estimation_id)
            ->where('over','=', $over)
            ->where('under','=', $under)
            ->pluck('user_id');
        $this->rankCalculator($user_id, $value, $sign);
        return true;
    }

    public function rankCalculator($user_id, $value, $sign){

        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

        $user_rank = User::select('id','rank')
                ->whereIn('id',$user_id)
                ->where('role','=','User')
                ->get();
        foreach($user_rank as $key=>$ranks){

            if($sign == "+"){
                $val = $ranks->rank + ($value/100);
            }else{
                $val = $ranks->rank - ($value/100);
            }
            $user = User::where('id','=',$ranks->id)
                    ->update(['rank' => $val]);
        }
        return true;
    }
    
    public function getUserListByRank(Request $request){

        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

        $users = DB::table('users')
            ->orderBy('rank','Desc')
            ->paginate($request->input("page_size"));

        return $this->sendResponse($users , 'Successfully get User List By Ranks');
    }


    public function getUserTipsHistory(Request $request){

        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        $user_info = User::find($request->user_id);
        if($user_info == null){
            return $this->sendResponse([] , "the user doesn't exit");
        }
        $tip_count = DB::select( DB::raw("SELECT COUNT(id) as count from tips WHERE user_id=".$request->user_id." GROUP BY user_id"));
        $user_info->tip_count = isset($tip_count[0])? $tip_count[0]->count : "";
        $tips_history = DB::select( DB::raw("Select  estimations.* , tips.* , t4.team_name as play_team_name from tips
                INNER JOIN (	SELECT est.id as estimations_id ,est.date, est.time,est.odd,est.odd_sign, est.odd_value,est.over_under_odd,est.over_under_sign,est.over_under_odd_value, est.home_final_result, est.away_final_result, t1.team_name as home,t1.team_icon as home_icon ,t2.team_name as away , t2.team_icon as away_icon , t3.team_name as odd_team_name, t3.team_icon as odd_team_icon , le.league_name, le.league_icon from estimations est
                    INNER JOIN teams t1 on t1.id = est.home  
                    INNER JOIN teams t2 on t2.id = est.away
                    INNER JOIN teams t3 on t3.id = est.odd_team
                    INNER JOIN leagues le on le.id = est.league_id
                ) as estimations on estimations.estimations_id = tips.estimation_id 
                INNER JOIN teams t4 on t4.id = tips.play_team_id
                WHERE tips.user_id = ".$request->user_id."
                ORDER BY tips.created_at DESC;"));
        $current_tips = [];
        foreach($tips_history as $key=>$data){
            if($data->home_final_result == null){
                $current_tips[] = $data;
                unset($tips_history[$key]);
            }
        }
        $data = [
            'user_info'=> $user_info,
            'current_tips'=> $current_tips,
            'tips_history' => $tips_history
        ];

        return $this->sendResponse($data , 'Successfully get User List By Ranks');
    }
}