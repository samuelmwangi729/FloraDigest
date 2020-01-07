<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Completed extends Model
{
    use softDeletes;
    public $fillable=[
        'clientAssignment',
        'clientDate',
        'AssignmentInto',
        'AssignmentConclusion',
        'Attachment',
        'status'
    ];

    protected $casts=[
        'clientAssignment'=>'string',
        'clientDate'=>'string',
        'AssignmentInto'=>'longText',
        'AssignmentConclusion'=>'longText',
        'Attachment'=>'string',
        'status'=>'integer'
    ];
    public static $rules=[
        'clientAssignment'=>'required',
        'clientDate'=>'required',
        'AssignmentInto'=>'required',
        'AssignmentConclusion'=>'required',
        'Attachment'=>'required',
    ];
}
