<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $fillable=[
        'title','text','content','slug','category_id','image'
    ];
    protected $dates=['deleted_at'];
    public function post(){
        return $this->belongsTo('App\Category');
    }

public function category(){
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
