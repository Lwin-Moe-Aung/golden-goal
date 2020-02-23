<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Percentage;
use Validator;
use Illuminate\Support\Facades\Auth;


class PercentagesController extends BaseController
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $percentage = Percentage::all();


        return $this->sendResponse($percentage->toArray(), 'Percentages retrieved successfully.');
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
            'start_date' => 'required',
            'match' => 'required',
            
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $percentage = Percentage::create($input);


        return $this->sendResponse($percentage->toArray(), 'Percentage created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $percentage = Percentage::find($id);
        if (is_null($percentage)) {
            return $this->sendError('Percentages not found.');
        }


        return $this->sendResponse($percentage->toArray(), 'Percentages retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Percentage $percentage)
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $input = $request->all();
        $validator = Validator::make($input, [
                    'start_date' => 'required',
                    'match' => 'required',
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $percentage->start_date = $input['start_date'];
        $percentage->match = $input['match'];
        $percentage->home = $input['home'];
        $percentage->draw = $input['draw'];
        $percentage->away = $input['away'];
        $percentage->goal_over = $input['goal_over'];
        $percentage->goal_under = $input['goal_under'];
       
        $percentage->save();


        return $this->sendResponse($percentage->toArray(), 'Percentage updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Percentage $percentage)
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        
        $percentage->delete();
        return $this->sendResponse($percentage->toArray(), 'Percentages deleted successfully.');
    }

    public function percentagesAllDelete()
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        
        Percentage::truncate();
        return $this->sendResponse('', 'All Percentage deleted successfully.');
    }
}