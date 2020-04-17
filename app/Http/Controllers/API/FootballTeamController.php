<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Team;
use App\League;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Estimation;
use Illuminate\Support\Facades\Auth;

class FootballTeamController extends BaseController
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
        
        $football_team = Team::select('*')->get();
       
        return $this->sendResponse($football_team->toArray(), 'football_teams retrieved successfully.');
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
            'team_name' => 'required',
            'team_icon' => 'required',
            'league_id' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $football_team = new Team;

        if($request->hasFile('team_icon')) {
            $icon_name = Str::random(20);
            $file = $request->file('team_icon');

            $filenametostore = $icon_name.'.'.$file->getClientOriginalExtension();
            $icon_path = '/'."Team_icons".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filenametostore;
            
            Storage::disk('public')->put($icon_path, file_get_contents($file));
            

            //Resize image here
            $thumbnail_name = 'thumbnail_'.Str::random(20);

            $filethumb = $thumbnail_name.'.'.$file->getClientOriginalExtension();
            $icon_thumb_nail_path = '/'."Team_icons".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filethumb;
            
            $icon_thumb_nail = public_path('storage/'.$icon_thumb_nail_path);
            $img = Image::make($request->file('team_icon')->getRealPath())->resize(90,90)->save($icon_thumb_nail);
            $football_team['team_icon'] = $icon_thumb_nail_path;
            
        }
        $football_team['team_name'] = $input['team_name'];
        $football_team['league_id'] = $input['league_id'];
        $football_team->save();


        return $this->sendResponse($football_team->toArray(), 'football_team created successfully.');
    }


   


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function footballTeamUpdate(Request $request)
    {
        
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

        $input = $request->all();


        $validator = Validator::make($input, [
            'team_name' => 'required',
            'league_id' => 'required'
            
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $football_team = Team::find($input['id']);
        
        $football_team->team_name = $input['team_name'];

        if($request->hasFile('team_icon')) {
            $icon_name = Str::random(20);
            $file = $request->file('team_icon');

            $filenametostore = $icon_name.'.'.$file->getClientOriginalExtension();
            $icon_path = '/'."Team_icons".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filenametostore;
            
            Storage::disk('public')->put($icon_path, file_get_contents($file));
            

            //Resize image here
            $thumbnail_name = 'thumbnail_'.Str::random(20);

            $filethumb = $thumbnail_name.'.'.$file->getClientOriginalExtension();
            $icon_thumb_nail_path = '/'."Team_icons".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filethumb;
            
            $icon_thumb_nail = public_path('storage/'.$icon_thumb_nail_path);
            $img = Image::make($request->file('team_icon')->getRealPath())->resize(90,90)->save($icon_thumb_nail);
            $football_team['team_icon'] = $icon_thumb_nail_path;
            
        }
        $football_team->league_id = $input['league_id'];
        $football_team->save();


        return $this->sendResponse($football_team->toArray(), 'football_team updated successfully.');
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
       
        $football_team = Team::findOrFail($id);
        $football_team->delete();
        $estimation = Estimation::where('home', $id)->orwhere('away', $id)->delete();
       
        return $this->sendResponse($football_team->toArray(), 'football_team deleted successfully.');
    }

    public function getTeamByLeagueid($id)
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
       
        
        $football_team = Team::select('*')->where('league_id', '=', $id)->get();
        
       
        return $this->sendResponse($football_team->toArray(), 'football_team retrieved by league id successfully.');
    }
}