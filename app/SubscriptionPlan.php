<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class SubscriptionPlan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'total_amount', 'desc', 'duration'
    ];
}