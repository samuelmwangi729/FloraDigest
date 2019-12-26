<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class County
 * @package App\Models
 * @version December 26, 2019, 12:33 pm UTC
 *
 */
class County extends Model
{
    use SoftDeletes;

    public $table = 'counties';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'county'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'county'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'county'=>'required'
    ];

    public function town(){
        return $this->hasMany('App\Models\Town');
    }
}
