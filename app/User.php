<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'role','start_date', 'end_date', 'member_type', 'device_id', 'imei', 'profile_photo','fb_id','phone_number', 'otp', 'expires_at', 'otp_request_count', 'last_otp_request_at', 'subscription_plan_id', 'subscription_end_date', 'is_verify'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_otp_request_at' => 'datetime',
    ];

    protected $dates = ['expires_at'];

    public function AauthAcessToken(){
        return $this->hasMany('\App\OauthAccessToken');
    }
}
