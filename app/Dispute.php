<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dispute extends Model
{
    use softDeletes;
    public $fillable=[
        'title',
        'clientDispute',
        'user',
        'status'
    ];

    protected $casts=[
        'title'=>'string',
        'clientDispute'=>'longText',
        'user'=>'string',
        'status'=>'integer'
    ];

    public static $rules=[
        'title'=>'required',
        'string'=>'required',
        'clientDispute'=>'required'
    ];
}
