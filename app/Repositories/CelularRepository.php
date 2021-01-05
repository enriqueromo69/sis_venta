<?php

namespace App\Repositories;

use App\Models\Celular;
use App\Repositories\BaseRepository;

/**
 * Class CelularRepository
 * @package App\Repositories
 * @version November 16, 2020, 10:14 pm UTC
*/

class CelularRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcliente',
        'celular'
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
        return Celular::class;
    }
}
