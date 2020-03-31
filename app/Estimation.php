<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
    //
     protected $fillable = [
        'date', 'league_id', 'home', 'away', 'home_can_win', 'can_draw', 'away_can_win', 'over', 'under', 'start_s', 'morning_s', 'evening_s', 'home_stand_level', 'away_stand_level', 'home_last_matchs', 'away_last_matchs', 'description'
    ];
}
