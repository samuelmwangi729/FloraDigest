<?php

namespace App\Repositories;

use App\Models\Color;
use App\Repositories\BaseRepository;

/**
 * Class ColorRepository
 * @package App\Repositories
 * @version December 24, 2019, 7:28 am UTC
*/

class ColorRepository extends BaseRepository
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
        return Color::class;
    }
}
