<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class News
 * @package App\Models
 * @version December 21, 2019, 8:27 am UTC
 *
 */
class News extends Model
{
    use SoftDeletes;

    public $table = 'news';
    

    protected $dates = ['deleted_at'];



    protected $fillable=[
        'title',
        'slug',
        'text',
        'content',
        'category_id',
        'image',
        'published_by'
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
        'title'=>'required',
        'text' =>'required',
        'content' =>'required',
        'category_id' =>'required',
        'image' =>'required',
    ];

    public function category(){
        return $this->belongsTo('App\NewsTags');
    }
}
