<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politics extends Model
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
     


    public static $rules = [
        'title'=>'required',
        'text' =>'required',
        'content' =>'required',
        'category_id' =>'required',
        'image' =>'required',
    ];

}
