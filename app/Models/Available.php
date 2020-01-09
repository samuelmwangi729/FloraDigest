<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Available
 * @package App\Models
 * @version January 7, 2020, 4:06 pm UTC
 *
 */
class Available extends Model
{
    use SoftDeletes;

    public $table = 'availables';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'topic',
        'budget',
        'displayImage',
        'introParagraph',
        'conclusionParagraph'
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
        'budget'=>'string',
        'displayImage'=>'string',
        'introParagraph'=>'string',
        'conclusionParagraph'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title'=>'required',
        'topic'=>'required',
        'budget'=>'required',
        'displayImage'=>'required',
        'introParagraph'=>'required',
        'conclusionParagraph'=>'required'
    ];

    
}
