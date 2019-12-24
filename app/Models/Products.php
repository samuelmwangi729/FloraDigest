<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Products
 * @package App\Models
 * @version December 23, 2019, 1:42 pm UTC
 *
 */
class Products extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'productName',
        'label',
        'slug',
        'originalPrice',
        'newPrice',
        'image1',
        'image2',
        'image3',
        'image4',
        'text',
        'category_id',
        'Description',
        'subcategory_id',
        'color',
        'brand',
        'height',
        'weight',
        'width',
        'depth',
        'expiry',
        'status',
        'count',
        'posted_by'
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
        'productName'=>'required',
        'label'=>'required',
        'originalPrice'=>'required',
        'newPrice'=>'required',
        'image1'=>'required',
        'image2'=>'required',
        'image3'=>'required',
        'image4'=>'required',
        'text'=>'required',
        'category_id'=>'required',
        'subcategory_id'=>'required',
        'Description'=>'required',
        'color'=>'required',
        'brand'=>'required',
        'height'=>'required',
        'weight'=>'required',
        'width'=>'required',
        'status'=>'required',
        'count'=>'required',
    ];

    
}
