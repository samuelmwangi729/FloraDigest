<?php

namespace App\Repositories;

use App\Models\Other;
use App\Repositories\BaseRepository;

/**
 * Class OtherRepository
 * @package App\Repositories
 * @version January 12, 2020, 3:33 pm UTC
*/

class OtherRepository extends BaseRepository
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
        return Other::class;
    }
}
