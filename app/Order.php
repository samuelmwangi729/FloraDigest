<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Order extends Model
{
    public $fillable=[
        'orderNumber',
        'username',
        'name',
        'phone',
        'post',
        'county',
        'town',
        'delivery',
        'shipmentAmount',
        'paymentMethod',
        'status'
    ];

    protected $casts=[
        'orderNumber'=>'string',
        'username'=>'string',
        'name'=>'string',
        'phone'=>'string',
        'post'=>'string',
        'county'=>'string',
        'town'=>'string',
        'delivery'=>'string',
        'shipmentAmount'=>'string',
        'paymentMethod'=>'string',
        'status'=>'integer'
    ];


    public static $rules=[
        'orderNumber'=>'required',
        'username'=>'required',
        'name'=>'required',
        'phone'=>'required',
        'post'=>'required',
        'county'=>'required',
        'town'=>'required',
        'delivery'=>'required',
        'shipmentAmount'=>'required',
        'paymentMethod'=>'required'
    ];
     //get the current order items for the logged in user 
     public static function getOrder(){
        $user=Auth::user()->email;
        $order=Order::where('username',$user)->get()->first();
        return $order;
    }
}
