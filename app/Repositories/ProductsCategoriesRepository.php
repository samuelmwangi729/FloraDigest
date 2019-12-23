<?php

namespace App\Repositories;

use App\Models\ProductsCategories;
use App\Repositories\BaseRepository;

/**
 * Class ProductsCategoriesRepository
 * @package App\Repositories
 * @version December 23, 2019, 1:42 pm UTC
*/

class ProductsCategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ProductsCategories::class;
    }
}
