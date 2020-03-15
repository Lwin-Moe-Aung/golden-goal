<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FootBallTeam extends Model
{
    //
     protected $fillable = [
        'team_name', 'league_id', 'team_icon'
    ];
}
