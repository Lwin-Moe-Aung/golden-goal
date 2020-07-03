<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Tip extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'estimation_id', 'play_team_id', 'over', 'under','tips_result','over_under_result'
    ];
}