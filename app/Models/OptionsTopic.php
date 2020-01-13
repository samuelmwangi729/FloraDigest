<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OptionsTopic
 * @package App\Models
 * @version January 12, 2020, 12:50 pm UTC
 *
 */
class OptionsTopic extends Model
{
    use SoftDeletes;

    public $table = 'opinionstopics';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'topicName',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'topicName'=>'string',
        'status'=>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'topicName'=>'required'
    ];

    
}
