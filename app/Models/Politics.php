<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Politics
 * @package App\Models
 * @version December 23, 2019, 6:27 am UTC
 *
 */
class Politics extends Model
{
    use SoftDeletes;

    public $table = 'politics';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'text',
        'content',
        'tag_id',
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
        'text'=>'required',
        'content'=>'required',
        'tag_id'=>'required',
        'image'=>'required',
    ];

    public function tags(){
        return $this->belongsTo('App\Models\PoliticsTags');
    }
}
