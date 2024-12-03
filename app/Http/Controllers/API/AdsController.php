<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Ad;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdsController extends BaseController
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

        $ads = Ad::select('*')->get();
        $data = [];
        foreach ($ads as $ad){
            $data[$ad->key] = $ad;
        }

        return $this->sendResponse($data, 'Ads retrieved successfully.');
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
            'changes' => 'required',
            'changesPublish' => 'required',
            'percentages' => 'required',
            'percentagesPublish' => 'required',
            'estimate' => 'required',
            'estimatePublish' => 'required',
            'estimateDetail' => 'required',
            'estimateDetailPublish' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        DB::table('ads')->truncate();

        if($request->hasFile('changes')) {
           $data = $this->imageSave($request->file('changes'), 'Changes');
           $ads = new Ad;
           $ads->original = $data["original"];
           $ads->thumb320x50 = $data["path320x50"];
           $ads->thumb300x250 = $data["path300x250"];
           $ads->thumb320x480 = $data["path320x480"];
           $ads['key'] = 'changes';
           $ads['publish'] = $input['changesPublish'];
           $ads['changes_ads_type'] = $input['changes_ads_type'];
           $ads['changes_url'] = $input['changes_url'];
           $ads->save();
        }
        if($request->hasFile('percentages')) {
            $data = $this->imageSave($request->file('percentages'), 'Percentages');
            $ads = new Ad;
            $ads->original = $data["original"];
            $ads->thumb320x50 = $data["path320x50"];
            $ads->thumb300x250 = $data["path300x250"];
            $ads->thumb320x480 = $data["path320x480"];
            $ads['key'] = 'percentages';
            $ads['publish'] = $input['percentagesPublish'];
            $ads['percentage_ads_type'] = $input['percentage_ads_type'];
            $ads['percentage_url'] = $input['percentage_url'];
            $ads->save();
        }
        if($request->hasFile('estimate')) {
            $data = $this->imageSave($request->file('estimate'), 'Estimate');
            $ads = new Ad;
            $ads->original = $data["original"];
            $ads->thumb320x50 = $data["path320x50"];
            $ads->thumb300x250 = $data["path300x250"];
            $ads->thumb320x480 = $data["path320x480"];
            $ads['key'] = 'estimate';
            $ads['publish'] = $input['estimatePublish'];
            $ads['estimate_ads_type'] = $input['estimate_ads_type'];
            $ads['estimate_url'] = $input['estimate_url'];
            $ads->save();
        }
        if($request->hasFile('estimateDetail')) {
            $data = $this->imageSave($request->file('estimateDetail'), 'EstimateDetail');
            $ads = new Ad;
            $ads->original = $data["original"];
            $ads->thumb320x50 = $data["path320x50"];
            $ads->thumb300x250 = $data["path300x250"];
            $ads->thumb320x480 = $data["path320x480"];
            $ads['key'] = 'estimateDetail';
            $ads['publish'] = $input['estimateDetailPublish'];
            $ads['estimate_detail_ads_type'] = $input['estimate_detail_ads_type'];
            $ads['estimate_detail_url'] = $input['estimate_detail_url'];
            $ads->save();
        }

        return $this->sendResponse([],'Ads created successfully.');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function imageSave($file, $key)
    {
        $rdnName = Str::random(20);
        $filenametostore = $rdnName.'.'.$file->getClientOriginalExtension();
        $path = '/'."Ads".'/'.$key.'/'.date("Y").'/'.$filenametostore;
        Storage::disk('public')->put($path, file_get_contents($file));

        //Resize image here 320x50
        $thumbnail_name_320x50 = '320x50'.$rdnName;
        $filethumb320x50 = $thumbnail_name_320x50.'.'.$file->getClientOriginalExtension();
        $path320x50 = '/'."Ads".'/'.$key.'/'.date("Y").'/'.$filethumb320x50;

        $thumb_nail320x50 = public_path('storage/'.$path320x50);
        $img = Image::make($file->getRealPath())->resize(320,50)->save($thumb_nail320x50);

        //Resize image here 300x250
        $thumbnail_name_300x250 = '300x250'.$rdnName;
        $filethumb300x250 = $thumbnail_name_300x250.'.'.$file->getClientOriginalExtension();
        $path300x250 = '/'."Ads".'/'.$key.'/'.date("Y").'/'.$filethumb300x250;

        $thumb_nail300x250 = public_path('storage/'.$path300x250);
        $img = Image::make($file->getRealPath())->resize(300,250)->save($thumb_nail300x250);

        //Resize image here 320x480
        $thumbnail_name_320x480 = '320x480'.$rdnName;
        $filethumb320x480 = $thumbnail_name_320x480.'.'.$file->getClientOriginalExtension();
        $path320x480 = '/'."Ads".'/'.$key.'/'.date("Y").'/'.$filethumb320x480;

        $thumb_nail320x480 = public_path('storage/'.$path320x480);
        $img = Image::make($file->getRealPath())->resize(300,480)->save($thumb_nail320x480);

        return [
            'original' => $path,
            'path320x50' => $path320x50,
            'path300x250' => $path300x250,
            'path320x480' => $path320x480
        ];
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        if (!Auth::guard('api')->check() || Auth::guard('api')->user()->role != 'Admin') {
            $error = "Unauthorized user";
            return $this->sendError($error,'',202);
        }

        $input = $request->all();
        $validator = Validator::make($input, [
            'changesPublish' => 'required',
            'percentagesPublish' => 'required',
            'estimatePublish' => 'required',
            'estimateDetailPublish' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $ads = Ad::where('key', 'changes')->first();
        if($request->hasFile('changes')) {
            $data = $this->imageSave($request->file('changes'), 'Changes');
            $ads->original = $data["original"];
            $ads->thumb320x50 = $data["path320x50"];
            $ads->thumb300x250 = $data["path300x250"];
            $ads->thumb320x480 = $data["path320x480"];
         }
        $ads['key'] = 'changes';
        $ads['publish'] = $input['changesPublish'];
        $ads['changes_ads_type'] = $input['changes_ads_type'];
        $ads['changes_url'] = $input['changes_url'];
        $ads->update();

        $ads = Ad::where('key', 'percentages')->first();
        if($request->hasFile('percentages')) {
            $data = $this->imageSave($request->file('percentages'), 'Percentages');
            $ads->original = $data["original"];
            $ads->thumb320x50 = $data["path320x50"];
            $ads->thumb300x250 = $data["path300x250"];
            $ads->thumb320x480 = $data["path320x480"];
        }
        $ads['key'] = 'percentages';
        $ads['publish'] = $input['percentagesPublish'];
        $ads['percentage_ads_type'] = $input['percentage_ads_type'];
        $ads['percentage_url'] = $input['percentage_url'];
        $ads->save();

        $ads = Ad::where('key', 'estimate')->first();
        if($request->hasFile('estimate')) {
            $data = $this->imageSave($request->file('estimate'), 'Estimate');
            $ads->original = $data["original"];
            $ads->thumb320x50 = $data["path320x50"];
            $ads->thumb300x250 = $data["path300x250"];
            $ads->thumb320x480 = $data["path320x480"];
        }
        $ads['key'] = 'estimate';
        $ads['publish'] = $input['estimatePublish'];
        $ads['estimate_ads_type'] = $input['estimate_ads_type'];
        $ads['estimate_url'] = $input['estimate_url'];
        $ads->save();

        $ads = Ad::where('key', 'estimateDetail')->first();
        if($request->hasFile('estimateDetail')) {
            $data = $this->imageSave($request->file('estimateDetail'), 'EstimateDetail');
            $ads->original = $data["original"];
            $ads->thumb320x50 = $data["path320x50"];
            $ads->thumb300x250 = $data["path300x250"];
            $ads->thumb320x480 = $data["path320x480"];
        }
        $ads['key'] = 'estimateDetail';
        $ads['publish'] = $input['estimateDetailPublish'];
        $ads['estimate_detail_ads_type'] = $input['estimate_detail_ads_type'];
        $ads['estimate_detail_url'] = $input['estimate_detail_url'];
        $ads->save();

        return $this->sendResponse([],'Ads updated successfully.');
    }


    /**
     * ads for changes
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getChanges()
    {
        $data = Ad::where('key', '=', 'changes')->first();
        return $this->sendResponse($data, 'Ads is successfully reteived.');
    }

     /**
     * ads for percentages
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getPercentages()
    {
        $data = Ad::where('key', '=', 'percentages')->first();
        // dd($data);
        return $this->sendResponse($data, 'Ads is successfully reteived.');
    }
     /**
     * ads for changes
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEstimate()
    {
        $data = Ad::where('key', '=', 'estimate')->first();
        return $this->sendResponse($data, 'Ads is successfully reteived.');
    }
     /**
     * ads for changes
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEstimateDetail()
    {
        $data = Ad::where('key', '=', 'estimateDetail')->first();
        return $this->sendResponse($data, 'Ads is successfully reteived.');
    }

}
