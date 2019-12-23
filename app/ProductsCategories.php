<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsCategories extends Model
{
 
    public $fillable=['name'];

    public static $rules=['name'=>'required'];

    
}
