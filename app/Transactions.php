<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    public $fillable=[
        'transactionId',
        'transactionAmount',
        'user',
        'orderNumber',
        'source',
    ];

    protected $casts=[
        'transactionId'=>'string',
        'transactionAmount'=>'string',
        'user'=>'string',
        'orderNumber'=>'string',
        'source'=>'string'
    ];

    public static $rules=[
        'transactionId'=>'required',
        'transactionAmount'=>'required',
        'user'=>'required',
        'orderNumber'=>'required',
        'source'=>'required',
    ];
}
