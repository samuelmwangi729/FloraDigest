<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    //
    public $fillable=['county'];
    protected $casts=['county'=>'string'];
    public static $rules=['county'=>'required'];
}
