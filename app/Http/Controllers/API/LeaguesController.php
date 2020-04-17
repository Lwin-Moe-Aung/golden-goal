<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\League;
use App\Team;
use App\Estimation;

use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;


class LeaguesController extends BaseController
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
            'league_name' => 'required',
            'league_icon' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $league = League::all();
        $priority = count($league);
        
        $league = new League;

        if($request->hasFile('league_icon')) {
            $icon_name = Str::random(20);
            $file = $request->file('league_icon');

            $filenametostore = $icon_name.'.'.$file->getClientOriginalExtension();
            $icon_path = '/'."League_icons".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filenametostore;
            
            Storage::disk('public')->put($icon_path, file_get_contents($file));
            

            //Resize image here
            $thumbnail_name = 'thumbnail_'.Str::random(20);

            $filethumb = $thumbnail_name.'.'.$file->getClientOriginalExtension();
            $icon_thumb_nail_path = '/'."League_icons".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filethumb;
            
            $icon_thumb_nail = public_path('storage/'.$icon_thumb_nail_path);
            $img = Image::make($request->file('league_icon')->getRealPath())->resize(90,90)->save($icon_thumb_nail);
            $league['league_icon'] = $icon_thumb_nail_path;
            
        }
        $league['league_name'] =$request->input('league_name');
        $league['priority'] = $priority + 1;
        $league->save();


        return $this->sendResponse($league->toArray(), 'League created successfully.');
    }


   


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function leagueUpdate(Request $request)
    {
        
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

        $input = $request->all();


        $validator = Validator::make($input, [
            'league_name' => 'required'
            
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $league = League::find($input['id']);
        
        $league->league_name = $input['league_name'];

        

        if($request->hasFile('league_icon')) {
            $icon_name = Str::random(20);
            $file = $request->file('league_icon');

            $filenametostore = $icon_name.'.'.$file->getClientOriginalExtension();
            $icon_path = '/'."League_icons".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filenametostore;
            
            Storage::disk('public')->put($icon_path, file_get_contents($file));
            

            //Resize image here
            $thumbnail_name = 'thumbnail_'.Str::random(20);

            $filethumb = $thumbnail_name.'.'.$file->getClientOriginalExtension();
            $icon_thumb_nail_path = '/'."League_icons".'/'.date("Y")."-".date("m").'/'.date("d").'/'.$filethumb;
            
            $icon_thumb_nail = public_path('storage/'.$icon_thumb_nail_path);
            $img = Image::make($request->file('league_icon')->getRealPath())->resize(90,90)->save($icon_thumb_nail);
            $league->league_icon = $icon_thumb_nail_path;
            
        }
        
        $league->save();


        return $this->sendResponse($league->toArray(), 'League updated successfully.');
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
       
        $leagueed = League::find($id);
       
        if($leagueed == null ){
            return $this->sendError("Invalid league id",'',404);
        }
        
        $leagueed->delete();
        // $team = Team::select('id')->where('league_id','=',$id)->get();
        $football_team = Team::where('league_id','=',$id)->delete();
        
        $estimation = Estimation::where('league_id','=',$id)->delete();
       
        $leagues = League::all();
        foreach ($leagues as $league) {
            if($league->priority > $leagueed->priority ){
                $league = League::find($league->id);
                $league['priority'] = $league['priority']-1;
                $league->save();
            }
           
        }
       
        return $this->sendResponse($leagueed->toArray(), 'league deleted successfully.');
    }

    public function changeLeaguePriority(Request $request){
         if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

        $input = $request->all();


        $validator = Validator::make($input, [
            'league_id' => 'required',
            'old_priority' => 'required',
            'new_priority' => 'required'

        ]);
        
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $league = League::where('priority','=',$input['new_priority'])->first();
        $league->priority = $input['old_priority'];
        $league->update();

        $leagues = League::find($input['league_id']);
        $leagues->priority = $input['new_priority'];
        $leagues->update();
        
        

        return $this->sendResponse('','League Priority changed successfully.');

        
    }
}