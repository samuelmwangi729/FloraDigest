<?php

namespace App\Repositories;

use App\Models\Available;
use App\Repositories\BaseRepository;

/**
 * Class AvailableRepository
 * @package App\Repositories
 * @version January 7, 2020, 4:06 pm UTC
*/

class AvailableRepository extends BaseRepository
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
        return Available::class;
    }
}
