<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Town
 * @package App\Models
 * @version December 26, 2019, 12:43 pm UTC
 *
 */
class Town extends Model
{
    use SoftDeletes;

    public $table = 'towns';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'county_id',
        'town'
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
        'county_id'=>'required',
        'town'=>'required'
    ];

    public function county(){
        return $this->hasMany('App\Models\County');
    }
}
