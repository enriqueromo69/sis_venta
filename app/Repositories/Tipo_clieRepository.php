<?php

namespace App\Repositories;

use App\Models\Tipo_clie;
use App\Repositories\BaseRepository;

/**
 * Class Tipo_clieRepository
 * @package App\Repositories
 * @version November 16, 2020, 10:14 pm UTC
*/

class Tipo_clieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descrip_doc',
        'caracteres'
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
        return Tipo_clie::class;
    }
}
