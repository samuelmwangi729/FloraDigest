<?php

namespace App\Repositories;

use App\Models\NewsTags;
use App\Repositories\BaseRepository;

/**
 * Class NewsTagsRepository
 * @package App\Repositories
 * @version December 21, 2019, 8:27 am UTC
*/

class NewsTagsRepository extends BaseRepository
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
        return NewsTags::class;
    }
}
