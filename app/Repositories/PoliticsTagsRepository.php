<?php

namespace App\Repositories;

use App\Models\PoliticsTags;
use App\Repositories\BaseRepository;

/**
 * Class PoliticsTagsRepository
 * @package App\Repositories
 * @version December 23, 2019, 5:14 am UTC
*/

class PoliticsTagsRepository extends BaseRepository
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
        return PoliticsTags::class;
    }
}
