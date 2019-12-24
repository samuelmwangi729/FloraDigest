<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Color
 * @package App\Models
 * @version December 24, 2019, 7:28 am UTC
 *
 */
class Color extends Model
{
    use SoftDeletes;

    public $table = 'colors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'colorName'
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
        'colorName'=>'required'
    ];

    
}
