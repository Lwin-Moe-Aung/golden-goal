<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\PercentagesDescription;
use Validator;
use Illuminate\Support\Facades\Auth;


class PercentagesDescriptionController extends BaseController
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
        
        $percentages_description = PercentagesDescription::all();
        return $this->sendResponse($percentages_description->toArray(), 'PercentagesDescription retrieved successfully.');
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
            'description' => 'required',
            
            
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $percentages_description = PercentagesDescription::create($input);


        return $this->sendResponse($percentages_description->toArray(), 'PercentagesDescription created successfully.');
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
        
        $percentages_description = PercentagesDescription::find($id);
        if (is_null($percentages_description)) {
            return $this->sendError('PercentagesDescription not found.');
        }


        return $this->sendResponse($percentages_description->toArray(), 'PercentagesDescription retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PercentagesDescription $percentages_description)
    {

        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        
        $input = $request->all();
        $validator = Validator::make($input, [
                    'description' => 'required',
                    
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        
        $percentages_description->description = $input['description'];
        
        $percentages_description->save();


        return $this->sendResponse($percentages_description->toArray(), 'PercentagesDescription updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PercentagesDescription $percentages_description)
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        
        $percentages_description->delete();
        return $this->sendResponse($percentages_description->toArray(), 'PercentagesDescriptiondeleted successfully.');
    }

    public function percentagesDesAllDelete()
    {
        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        
        PercentagesDescription::truncate();
        return $this->sendResponse('', 'All PercentagesDescription deleted successfully.');
    }
}