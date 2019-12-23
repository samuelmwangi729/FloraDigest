<?php

namespace App\Repositories;

use App\Models\Subcategories;
use App\Repositories\BaseRepository;

/**
 * Class SubcategoriesRepository
 * @package App\Repositories
 * @version December 23, 2019, 2:40 pm UTC
*/

class SubcategoriesRepository extends BaseRepository
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
        return Subcategories::class;
    }
}
