<?php

namespace App\Repositories;

use App\Models\Topics;
use App\Repositories\BaseRepository;

/**
 * Class TopicsRepository
 * @package App\Repositories
 * @version January 7, 2020, 4:07 pm UTC
*/

class TopicsRepository extends BaseRepository
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
        return Topics::class;
    }
}
