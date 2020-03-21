<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['user_id','customer_name','shipping_address','telephone',
         'grand_total','payment_method','status' ];
}
