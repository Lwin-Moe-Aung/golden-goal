<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\ChangesDescription;
use Validator;
use Illuminate\Support\Facades\Auth;


class ChangesDescriptionController extends BaseController
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
        
        $changes_description = ChangesDescription::all();
        return $this->sendResponse($changes_description->toArray(), 'Changes retrieved successfully.');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::guard('api')->check()) {
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


        $changes_description = ChangesDescription::create($input);


        return $this->sendResponse($changes_description->toArray(), 'Changes description created successfully.');
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
        
        $changes_description = ChangesDescription::find($id);
        if (is_null($changes_description)) {
            return $this->sendError('Changes description not found.');
        }


        return $this->sendResponse($changes_description->toArray(), 'Changes description retrieved successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChangesDescription $changes_description)
    {

        if (!Auth::guard('api')->check()) {
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
        
        $changes_description->description = $input['description'];
        
        $changes_description->save();


        return $this->sendResponse($changes_description->toArray(), 'Changes description updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangesDescription $changes_description)
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        $changes_description->delete();
        return $this->sendResponse($changes_description->toArray(), 'Changes description deleted successfully.');
    }

    public function changesDesAllDelete()
    {
        if (!Auth::guard('api')->check()) {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }
        
        ChangesDescription::truncate();
        return $this->sendResponse('', 'All Changes description deleted successfully.');
    }
}