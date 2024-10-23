<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Transaction extends Model
{

    protected $fillable = [
        'user_id', 'plan_id', 'order_id','transaction_status'
    ];
   
}
