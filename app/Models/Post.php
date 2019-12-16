<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version December 16, 2019, 6:59 am UTC
 *
 * @property string title
 * @property string text
 * @property string content
 * @property string category_id
 * @property string image
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'text',
        'content',
        'category_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'text' => 'string',
        'content' => 'string',
        'category_id' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'text' => 'required',
        'content' => 'required',
        'category_id' => 'required',
        'image' => 'required'
    ];

    
}
