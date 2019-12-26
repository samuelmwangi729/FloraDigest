<?php

namespace App\Repositories;

use App\Models\Shipping;
use App\Repositories\BaseRepository;

/**
 * Class ShippingRepository
 * @package App\Repositories
 * @version December 26, 2019, 2:45 pm UTC
*/

class ShippingRepository extends BaseRepository
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
        return Shipping::class;
    }
}
