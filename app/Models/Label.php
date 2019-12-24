<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Label
 * @package App\Models
 * @version December 24, 2019, 5:28 pm UTC
 *
 */
class Label extends Model
{
    use SoftDeletes;

    public $table = 'labels';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'labelName'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'labelName'=>'required'
    ];

    
}
