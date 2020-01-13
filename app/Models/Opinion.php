<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Opinion
 * @package App\Models
 * @version January 12, 2020, 6:21 am UTC
 *
 */
class Opinion extends Model
{
    use SoftDeletes;

    public $table = 'opinions';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'topic',
        'opinion',
        'user',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title'=>'string',
        'slug'=>'string',
        'topic'=>'string',
        'opinion'=>'longText',
        'user'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title'=>'required',
        'topic'=>'required',
        'opinion'=>'required'
    ];

    
}
