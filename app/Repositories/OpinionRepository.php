<?php

namespace App\Repositories;

use App\Models\Opinion;
use App\Repositories\BaseRepository;

/**
 * Class OpinionRepository
 * @package App\Repositories
 * @version January 12, 2020, 6:21 am UTC
*/

class OpinionRepository extends BaseRepository
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
        return Opinion::class;
    }
}
