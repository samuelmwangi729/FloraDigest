<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function post(){
        return $this->belongsToMany('App\Post');
    }
}
