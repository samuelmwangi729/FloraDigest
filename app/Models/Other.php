<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Other
 * @package App\Models
 * @version January 12, 2020, 3:33 pm UTC
 *
 */
class Other extends Model
{
    use SoftDeletes;

    public $table = 'others';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'topic',
        'content',
        'names',
        'email'
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
        'content'=>'longText',
        'names'=>'string',
        'email'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title'=>'required',
        'topic'=>'required',
        'content'=>'required',
        'names'=>'required',
        'email'=>'required'
    ];

    
}
