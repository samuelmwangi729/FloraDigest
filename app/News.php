<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=[
        'title',
        'slug',
        'text',
        'content',
        'category_id',
        'image',
        'published_by'
    ];


    public static $rules=[
        'title'=>'required'
    ];
    public function category(){
        return $this->belongsTo('App\NewsTags');
    }
}
