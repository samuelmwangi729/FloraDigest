<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NewsTags
 * @package App\Models
 * @version December 21, 2019, 8:27 am UTC
 *
 */
class NewsTags extends Model
{
    use SoftDeletes;

    public $table = 'news_tags';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
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
        'name'=>'required'
    ];

    
}
