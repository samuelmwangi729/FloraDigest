<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $fillable=['logo','name'];


    public $casts=[
        'logo'=>'string',
        'name'=>'string'
];

public static $rules=[
    'logo'=>'required',
    'name'=>'string'
];
}
