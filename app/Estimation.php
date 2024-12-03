<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimation extends Model
{
    //
     protected $fillable = [
        'date',
        'time',
        'league_id',
        'home',
        'away',
        'home_can_win',
        'can_draw',
        'away_can_win',
        'over',
        'under',

        'start_body',
        'start_goal',
        'morning_body',
        'morning_goall',
        'evening_body',
        'evening_goal',

        'both_team_odd',
        'one_team_odd',
        'both_team_possible',
        'one_team_possible',
        'golden_goal_choice',
        'guess_result',
        'fact',
        'injury',

        'home_stand_level',
        'away_stand_level',
        'home_last_matchs',
        'away_last_matchs',
        'description',
        'odd',
        'odd_sign',
        'odd_value',
        'odd_team',
        'over_under_odd',
        'over_under_sign',
        'over_under_odd_value',
        'home_final_result',
        'away_final_result',
        'publish',
        'publish_changes',
        'publish_percentages',
        'changes_start_time',
        'percentages_start_time',
        'last_match_price',
        'current_match_price',
        'selected_body_team',
        'is_body_win',
        'is_goal_win'
    ];
}
