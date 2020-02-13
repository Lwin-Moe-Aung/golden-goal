<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Change;
use Validator;


class ChangeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $change = Change::all();


        return $this->sendResponse($change->toArray(), 'Changes retrieved successfully.');
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
            'start_date' => 'required',
            'match' => 'required',
            
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $change = Change::create($input);


        return $this->sendResponse($change->toArray(), 'Changes created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $change = Change::find($id);


        if (is_null($change)) {
            return $this->sendError('Changes not found.');
        }


        return $this->sendResponse($change->toArray(), 'Changes retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Change $change)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
                    'start_date' => 'required',
                    'match' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $change->start_date = $input['start_date'];
        $change->match = $input['match'];
        $change->start_body = $input['start_body'];
        $change->start_goal = $input['start_goal'];
        $change->morning_body = $input['morning_body'];
        $change->morning_goal = $input['morning_goal'];
        $change->evening_body = $input['evening_body'];
        $change->evening_goal = $input['evening_goal'];
        $change->save();


        return $this->sendResponse($change->toArray(), 'Change updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Change $change)
    {
        
        $change->delete();


        return $this->sendResponse($change->toArray(), 'Changes deleted successfully.');
    }

    public function changesAllDelete()
    {
        
        Change::truncate();


        return $this->sendResponse('', 'All Changes deleted successfully.');
    }
}