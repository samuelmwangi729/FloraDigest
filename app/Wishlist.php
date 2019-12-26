<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    
    public $fillable=[
        'product_slug',
        'user'
    ];
    protected $cast=[
        'product_slug'=>'string',
        'user'=>'string'
    ];
    public static $rules=[
        'product_slug'=>'required',
        'user'=>'required'
    ];
}
