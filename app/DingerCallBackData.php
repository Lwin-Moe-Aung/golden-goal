<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class DingerCallBackData extends Model
{
    protected $fillable = [
        'totalAmount', 'transactionStatus', 'methodName','providerName', 'merchantOrderId', 'transactionId', 'customerName'
    ];
   
   
}
