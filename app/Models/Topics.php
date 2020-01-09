<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Topics
 * @package App\Models
 * @version January 7, 2020, 4:07 pm UTC
 *
 */
class Topics extends Model
{
    use SoftDeletes;

    public $table = 'topics';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'slug',
        'displayImage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name'=>'string',
        'slug'=>'string',
        'displayImage'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'=>'required',
        'displayImage'=>'required'
    ];

    
}
