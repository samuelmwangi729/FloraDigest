<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PoliticsTags
 * @package App\Models
 * @version December 23, 2019, 5:14 am UTC
 *
 */
class PoliticsTags extends Model
{
    use SoftDeletes;

    public $table = 'politics_tags';

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
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
        'name'=>'required'
    ];

    
}
