<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proposal extends Model
{   
    use softDeletes;
    public $fillable=[
        'clientEmail',
        'clientName',
        'clientAssignment',
        'slug',
        'clientDate',
        'clientDescription',
        'clientAttachment',
        'clientBudget'
    ];

    protected $casts=[
        'clientEmail'=>'string',
        'clientName'=>'string',
        'clientAssignment'=>'string',
        'slug'=>'string',
        'clientDate'=>'string',
        'clientDescription'=>'longText',
        'clientAttachment'=>'string',
        'clientBudget'=>'string'
    ];
    public static $rules=[
        'clientEmail'=>'required',
        'clientName'=>'required',
        'clientAssignment'=>'required',
        'slug'=>'required',
        'clientDate'=>'required',
        'clientDescription'=>'required',
        'clientAttachment'=>'required',
        'clientBudget'=>'required'
    ];
}
