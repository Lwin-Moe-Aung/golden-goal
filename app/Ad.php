<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //
    protected $fillable = [
        'key', 'original', 'thumb320x50', 'thumb300x250', 'thumb320x480', 'publish'
    ];
}
