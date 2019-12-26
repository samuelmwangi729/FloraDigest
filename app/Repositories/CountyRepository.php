<?php

namespace App\Repositories;

use App\Models\County;
use App\Repositories\BaseRepository;

/**
 * Class CountyRepository
 * @package App\Repositories
 * @version December 26, 2019, 12:33 pm UTC
*/

class CountyRepository extends BaseRepository
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
        return County::class;
    }
}
