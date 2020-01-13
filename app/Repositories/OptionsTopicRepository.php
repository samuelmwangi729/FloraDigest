<?php

namespace App\Repositories;

use App\Models\OptionsTopic;
use App\Repositories\BaseRepository;

/**
 * Class OptionsTopicRepository
 * @package App\Repositories
 * @version January 12, 2020, 12:50 pm UTC
*/

class OptionsTopicRepository extends BaseRepository
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
        return OptionsTopic::class;
    }
}
