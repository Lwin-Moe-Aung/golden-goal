<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    //
     protected $fillable = [
        'id', 'league_name', 'priority', 'league_icon', 'is_paid'
    ];
}
