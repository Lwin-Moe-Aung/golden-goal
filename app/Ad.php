<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //
    protected $fillable = [
        'key', 'original', 'thumb320x50', 'thumb300x250', 'thumb320x480', 'publish',
        'changes_ads_type',
        'changes_url',
        'percentage_ads_type',
        'percentage_url',
        'estimate_ads_type',
        'esitimage_ads_url',
        'estimate_detail_ads_type',
        'estimate_detail_url',
    ];
    
}
