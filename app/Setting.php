<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
class Setting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_active_otp_service',
        'is_force_update'
    ];
}
