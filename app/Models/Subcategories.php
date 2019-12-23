<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subcategories
 * @package App\Models
 * @version December 23, 2019, 2:40 pm UTC
 *
 */
class Subcategories extends Model
{
    use SoftDeletes;

    public $table = 'sub_categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'mainCategory',
        'subcategoryName'
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
        'mainCategory'=>'required',
        'subcategoryName'=>'required'
    ];

}
