<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    public $fillabel=[
        'maincategory',
        'subcategoryName'
    ];



    public static $rules=[
        'mainCategory'=>'required',
        'subcategoryName'=>'required'
    ];
}
