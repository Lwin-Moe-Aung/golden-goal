<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\League;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Image;


class LeaguesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            $img = Image::make($request->file('league_icon')->getRealPath())->resize(90,45)->save($icon_thumb_nail);
            $league['league_icon'] = $icon_thumb_nail_path;
            
        }
        $league['league_name'] =$request->input('league_name');
        $league['priority'] = $priority + 1;
        $league->save();


        return $this->sendResponse($league->toArray(), 'League created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $league = League::find($id);


        if (is_null($league)) {
            return $this->sendError('League not found.');
        }


        return $this->sendResponse($league->toArray(), 'League retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, League $league)
    {
        $input = $request->all();


        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $league->league_name = $input['league_name'];
        $league->priority = $input['priority'];
        $league->save();


        return $this->sendResponse($product->toArray(), 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(League $league)
    {
        $product->delete();


        return $this->sendResponse($product->toArray(), 'Product deleted successfully.');
    }
}