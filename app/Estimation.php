<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
    //
     protected $fillable = [
        'date', 'time', 'league_id', 'home', 'away', 'home_can_win', 'can_draw', 'away_can_win', 'over', 'under', 'start_s', 'morning_s', 'evening_s', 'home_stand_level', 'away_stand_level', 'home_last_matchs', 'away_last_matchs', 'description','odd','odd_value','odd_team','over_under_odd','over_under_odd_value','home_final_result','away_final_result'
    ];
}
