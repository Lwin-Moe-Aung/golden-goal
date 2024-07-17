<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{

    protected $fillable = [
        'phone_number', 'username', 'password',
    ];
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the OTPs for the customer.
     */
    public function otps()
    {
        return $this->hasMany(OTP::class);
    }
}
