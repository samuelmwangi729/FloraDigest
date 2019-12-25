<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $fillable=[
        'product_slug',
        'price',
        'qty',
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
}
