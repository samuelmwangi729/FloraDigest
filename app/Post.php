<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $fillable=[
        'title','text','content','slug'
    ];
    protected $dates=['deleted_at'];
    public function post(){
        return $this->belongsTo('App\Category');
    }
}
