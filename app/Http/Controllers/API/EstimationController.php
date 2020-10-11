<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Estimation;
use App\Team;
use App\League;
use App\Tip;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use DB;
Use \Carbon\Carbon;


class EstimationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        $estimations = DB::table('estimations')
            
            ->paginate($request->input("per_page"));

         if(count($estimations) > 0){
            foreach ($estimations as $key => $value) {
               
                $team = Team::find($value->home);
                $value->home_team_name = $team->team_name;
                $value->home_team_icon = $team->team_icon;
                $team = Team::find($value->away);
                $value->away_team_name = $team->team_name;
                $value->away_team_icon = $team->team_icon;
                $league = League::find($value->league_id);
                $value->league_name = $league->league_name;
                $value->league_icon = $league->league_icon;
                $team = Team::find($value->odd_team);
                $value->odd_team_name = $team->team_name;
                $value->odd_team_icon = $team->team_icon;
               
                $estimations[$key] = $value;
                
            }
            
            return $this->sendResponse($estimations->toArray(), 'estimations retrieved successfully.');
            
        }
        return $this->sendError('No Data.....','',202);    
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
       
        $input = $request->all();
        

        $validator = Validator::make($input, [
            'date' => 'required',
            'league_id' => 'required',
            'home' => 'required',
            'away' => 'required'

        ]);

        
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $estimation = new Estimation;

        $estimation['date'] = $request->input('date');
        $estimation['time'] = $request->input('time');
        $estimation['league_id'] = $request->input('league_id');
        $estimation['home'] =$request->input('home');
        $estimation['away'] =$request->input('away');
        $estimation['home_can_win'] =$request->input('home_can_win');
        $estimation['can_draw'] =$request->input('can_draw');
        $estimation['away_can_win'] =$request->input('away_can_win');
        $estimation['over'] =$request->input('over');
        $estimation['under'] =$request->input('under');
        $estimation['start_s'] =$request->input('start_s');
        $estimation['morning_s'] =$request->input('morning_s');
        $estimation['evening_s'] =$request->input('evening_s');
        $estimation['home_stand_level'] =$request->input('home_stand_level');
        $estimation['away_stand_level'] =$request->input('away_stand_level');
        $estimation['home_last_matchs'] =$request->input('home_last_matchs');
        $estimation['away_last_matchs'] =$request->input('away_last_matchs');
        $estimation['description'] =$request->input('description');

        $estimation['odd'] =$request->input('odd');
        $estimation['odd_sign'] =$request->input('odd_sign');
        $estimation['odd_value'] =$request->input('odd_value');
        $estimation['odd_team'] =$request->input('odd_team');
        $estimation['over_under_odd'] =$request->input('over_under_odd');
        $estimation['over_under_sign'] =$request->input('over_under_sign');
        $estimation['over_under_odd_value'] =$request->input('over_under_odd_value');
        $estimation->save();


        return $this->sendResponse($estimation->toArray(), 'Estimation created successfully.');
    }

    public function update(Request $request, $id)
    {
       
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'date' => 'required',
            'league_id' => 'required',
            'home' => 'required',
            'away' => 'required'

        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $estimation = Estimation::findOrFail($id);

        $estimation['date'] = $request->input('date');
        $estimation['time'] = $request->input('time');
        $estimation['league_id'] = $request->input('league_id');
        $estimation['home'] =$request->input('home');
        $estimation['away'] =$request->input('away');
        $estimation['home_can_win'] =$request->input('home_can_win');
        $estimation['can_draw'] =$request->input('can_draw');
        $estimation['away_can_win'] =$request->input('away_can_win');
        $estimation['over'] =$request->input('over');
        $estimation['under'] =$request->input('under');
        $estimation['start_s'] =$request->input('start_s');
        $estimation['morning_s'] =$request->input('morning_s');
        $estimation['evening_s'] =$request->input('evening_s');
        $estimation['home_stand_level'] =$request->input('home_stand_level');
        $estimation['away_stand_level'] =$request->input('away_stand_level');
        $estimation['home_last_matchs'] =$request->input('home_last_matchs');
        $estimation['away_last_matchs'] =$request->input('away_last_matchs');
        $estimation['description'] =$request->input('description');
        $estimation['odd'] =$request->input('odd');
        $estimation['odd_sign'] =$request->input('odd_sign');
        $estimation['odd_value'] =$request->input('odd_value');
        $estimation['odd_team'] =$request->input('odd_team');
        $estimation['over_under_odd'] =$request->input('over_under_odd');
        $estimation['over_under_sign'] =$request->input('over_under_sign');
        $estimation['over_under_odd_value'] =$request->input('over_under_odd_value');

        $estimation->save();


        return $this->sendResponse($estimation->toArray(), 'Estimation Updated successfully.');
    }
   



      
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
       
        $estimation = Estimation::findOrFail($id);
        $estimation->delete();

        
       
        return $this->sendResponse($estimation->toArray(), 'league deleted successfully.');
    }


     
    public function getEstimationsByDate(Request $request)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $league = League::select('*')->orderBy('priority', 'ASC')->get();
        $ordered_leagues = [];
        foreach ($league as $key => $value) {
            $ordered_leagues[$value->id] = $value;
        }
        $estimation = DB::table('estimations')
            ->select('*')
            ->where('date', '=', $request->input('date'))
            ->get();
        
        $estimation_by_date = [];
        $estimation_by_date_no_key = [];
        if(count($estimation) > 0){
            foreach ($estimation as $key => $value) {
                $team = Team::find($value->home);
                $value->home_team_name = $team->team_name;
                $value->home_team_icon = $team->team_icon;
                $team = Team::find($value->away);
                $value->away_team_name = $team->team_name;
                $value->away_team_icon = $team->team_icon;

                $estimation_by_date[$ordered_leagues[$value->league_id]["priority"]]["league_id"] = $ordered_leagues[$value->league_id]["id"];
                $estimation_by_date[$ordered_leagues[$value->league_id]["priority"]]["league_name"] = $ordered_leagues[$value->league_id]["league_name"];
                $estimation_by_date[$ordered_leagues[$value->league_id]["priority"]]["league_icon"] = $ordered_leagues[$value->league_id]["league_icon"];
                $estimation_by_date[$ordered_leagues[$value->league_id]["priority"]]["priority"] = $ordered_leagues[$value->league_id]["priority"];
                $estimation_by_date[$ordered_leagues[$value->league_id]["priority"]]["match"][] = $value;

                
            }
            ksort($estimation_by_date);

            foreach ($estimation_by_date as $key1 => $value1) {
                $estimation_by_date_no_key[] = $value1;
            }
            return $this->sendResponse($estimation_by_date_no_key, 'Estimation By Date was retrieved successfully.');
            
        }
        return $this->sendError('No Data.....','',202);    
        
    }

     
    public function getOrderedLeagues()
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
       
        $league = League::select('*')->orderBy('priority', 'ASC')->get();
        $ordered_leagues = [];
        foreach ($league as $key => $value) {
            $ordered_leagues[$value->id] = $value;
        }
        return $this->sendResponse($ordered_leagues, 'Ordered Leagues are retrieved successfully.');
    }

     
    public function getEstimationsById(Request $request)
    {
        $id = $request->estimation_id;
        $user_id = $request->user_id;

        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
       
        $estimation = Estimation::find($id);
       
        if($estimation == null){
            return $this->sendError('No Data.....','',202);    
        }
        
        $voting_result = DB::select( DB::raw(
            "SELECT play_team_id,COUNT( estimation_id) as voting from tips 
                WHERE tips.estimation_id = ".$id." and play_team_id IS NOT NULL GROUP BY play_team_id"));
        
        $over_voting = DB::select( DB::raw(
            "SELECT COUNT( estimation_id) as voting from tips 
                WHERE tips.estimation_id = ".$id." and over = 'yes'"));
                
        $under_voting = DB::select( DB::raw(
            "SELECT COUNT( estimation_id) as voting from tips 
                WHERE tips.estimation_id = ".$id." and under = 'yes'"));

        
        if(isset($voting_result[0]) && isset($voting_result[1])){
           
            $teama = ($voting_result[0]->voting / ($voting_result[0]->voting +  $voting_result[1]->voting)) *100;
            $teamb = ($voting_result[1]->voting / ($voting_result[0]->voting +  $voting_result[1]->voting)) *100;
            
            if( $estimation->home ==  $voting_result[0]->play_team_id){
                $home_odd_voting = round($teama,2);
                $away_odd_voting = round($teamb,2);
            }else{
                $home_odd_voting = round($teamb,2);
                $away_odd_voting = round($teama,2);
            }

        }elseif(isset($voting_result[0]) && !isset($voting_result[1])){
            if( $estimation->home ==  $voting_result[0]->play_team_id){
                $home_odd_voting = 100;
                $away_odd_voting = 0;
            }else{
                $home_odd_voting = 0;
                $away_odd_voting = 100;
            }
        }else{
            $home_odd_voting = 0;
            $away_odd_voting = 0;
        }
       
        if($over_voting[0]->voting != 0 && $under_voting[0]->voting != 0){
           
            $over = ($over_voting[0]->voting / ($under_voting[0]->voting +  $over_voting[0]->voting)) *100;
            $under = ($under_voting[0]->voting / ($under_voting[0]->voting +  $over_voting[0]->voting)) *100;
            $over_tip_voting = round($over,2);
            $under_tip_voting = round($under,2);
           

        }elseif($over_voting[0]->voting != 0 && $under_voting[0]->voting == 0){
            $over_tip_voting = 100;
            $under_tip_voting = 0;
        }elseif($under_voting[0]->voting == 0 && $over_voting[0]->voting != 0){
            $over_tip_voting = 0;
            $under_tip_voting = 100;
        }else{
            $over_tip_voting = 0;
            $under_tip_voting = 0;
        }
        

        $tip = Tip::select('*')
                ->where('user_id','=',$user_id)
                ->where('estimation_id','=',$id)
                ->first();
        // dd($tip->play_team_id);
        $can_play_tip = false;
        $can_play_over_under = false;
        if($tip == null){
            $can_play_tip = true;
            $can_play_over_under = true;
            $play_team_id = null;
            $played_over = false;
            $played_under = false;
        }else{
            if($tip->play_team_id == null){
                $can_play_tip = true;
            }
            if($tip->over == "no" &&  $tip->under == "no"){
                $can_play_over_under = true;
            }
            $play_team_id = $tip->play_team_id;
            $played_over = $tip->over == 'yes'? true: false;
            $played_under = $tip->under == 'yes'? true: false;
        }
        // $dt = strtotime($estimation->date.$estimation->time);
        $est_date = date("Y-m-d H:i:s", strtotime($estimation->date.$estimation->time));
        $estimation->play_status = Carbon::now()->diffInMinutes($est_date,false) <= 0 ? false: true;
        $estimation->can_play_tip = $can_play_tip;
        $estimation->can_play_over_under = $can_play_over_under;
        $estimation->home_odd_voting = $home_odd_voting;
        $estimation->away_odd_voting = $away_odd_voting;
        $estimation->over_tip_voting = $over_tip_voting;
        $estimation->under_tip_voting = $under_tip_voting;
        $estimation->play_team_id = $play_team_id;
        $estimation->played_over = $played_over;
        $estimation->played_under = $played_under;



        

        return $this->sendResponse($estimation, 'Estimation are retrieved successfully.');

    }
}