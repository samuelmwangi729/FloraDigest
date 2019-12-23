<?php

namespace App\Repositories;

use App\Models\Politics;
use App\Repositories\BaseRepository;

/**
 * Class PoliticsRepository
 * @package App\Repositories
 * @version December 23, 2019, 6:27 am UTC
*/

class PoliticsRepository extends BaseRepository
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
        return Politics::class;
    }
}
