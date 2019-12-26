<?php

namespace App\Repositories;

use App\Models\Town;
use App\Repositories\BaseRepository;

/**
 * Class TownRepository
 * @package App\Repositories
 * @version December 26, 2019, 12:43 pm UTC
*/

class TownRepository extends BaseRepository
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
        return Town::class;
    }
}
