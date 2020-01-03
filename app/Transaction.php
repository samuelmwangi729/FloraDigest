<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $fillable=[
        'transactionId',
        'transactionAmount',
        'user',
        'source',
    ];

    protected $casts=[
        'transactionId'=>'string',
        'transactionAmount'=>'string',
        'user'=>'string',
        'source'=>'string'
    ];

    public static $rules=[
        'transactionId'=>'required',
        'transactionAmount'=>'required',
        'user'=>'required',
        'source'=>'required',
    ];
}
