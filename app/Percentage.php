<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Percentage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_date',
        'match',
        'home',
        'draw',
        'away',
        'goal_over',
        'goal_under',
        'publish',
        'estimation_id'
    ];
}
