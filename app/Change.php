<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Change extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_date',
        'match',
        'start_body',
        'start_goal',
        'morning_body',
        'morning_goal',
        'evening_body',
        'evening_goal',
        'publish',
        'estimation_id'
    ];
}
