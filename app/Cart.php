<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
class Cart extends Model
{
    public $fillable=[
        'product_slug',
        'price',
        'qty',
        'total',
        'user'
    ];
    protected $casts = [
        'product_slug' => 'string',
        'price'=>'integer',
        'qty'=>'integer',
        'user'=>'string'
    ];

    public static $rules=[
        'product_slug'=>'required',
        'price'=>'required',
        'qty'=>'required',
        'user'=>'required'
    ];

    public static function getTotal(){
        $user=Auth::user()->email;
        $total=DB::table('carts')->where('user',Auth::user()->email)
                             ->sum('total');
        return $total;
    }
    public static function getUser(){
        return Auth::user()->email;
    }
}
