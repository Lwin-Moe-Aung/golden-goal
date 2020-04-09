<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Estimation;
use App\Team;
use App\League;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use DB;


class EstimationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        $leagues = League::all();


        return $this->sendResponse($leagues->toArray(), 'Leagues retrieved successfully.');
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
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
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
        if(count($estimation) > 0){
            foreach ($estimation as $key => $value) {
                $team = Team::find($value->home);
                $value->home_team_name = $team->team_name;
                $value->home_team_icon = $team->team_icon;
                $team = Team::find($value->away);
                $value->away_team_name = $team->team_name;
                $value->away_team_icon = $team->team_icon;

                $estimation_by_date[$value->league_id]["league_id"] = $ordered_leagues[$value->league_id]["id"];
                $estimation_by_date[$value->league_id]["league_name"] = $ordered_leagues[$value->league_id]["league_name"];
                $estimation_by_date[$value->league_id]["league_icon"] = $ordered_leagues[$value->league_id]["league_icon"];
                $estimation_by_date[$value->league_id]["priority"] = $ordered_leagues[$value->league_id]["priority"];
                $estimation_by_date[$value->league_id]["match"][] = $value;

                
            }
            return $this->sendResponse($estimation_by_date, 'Estimation By Date was retrieved successfully.');
            
        }
         return $this->sendError('No Data.....');    
        
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

     
    public function getEstimationsById($id)
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
       
        $estimation = Estimation::findOrFail($id);
        if( count($estimation->toArray()) > 0){
            return $this->sendResponse($estimation, 'Estimation are retrieved successfully.');
        }
        return $this->sendError('No Data.....');    
    }
}