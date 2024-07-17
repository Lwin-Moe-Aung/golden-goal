<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Otp extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'otp_code', 'expires_at', 'action', 'is_verified', 'unique_key'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
