<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    public $fillable=[
        'title',
        'slug',
        'topic',
        'opinion'
    ];
    
    protected $casts=[
        'title'=>'string',
        'slug'=>'string',
        'topic'=>'string',
        'opinion'=>'longText'
    ];


    public static $rules=[
        'title'=>'required',
        'topic'=>'required',
        'opinion'=>'required'
    ];
}
