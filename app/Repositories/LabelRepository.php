<?php

namespace App\Repositories;

use App\Models\Label;
use App\Repositories\BaseRepository;

/**
 * Class LabelRepository
 * @package App\Repositories
 * @version December 24, 2019, 5:28 pm UTC
*/

class LabelRepository extends BaseRepository
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
        return Label::class;
    }
}
