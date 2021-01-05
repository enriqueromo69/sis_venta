<?php

namespace App\Repositories;

use App\Models\Comprobante;
use App\Repositories\BaseRepository;

/**
 * Class ComprobanteRepository
 * @package App\Repositories
 * @version November 17, 2020, 8:38 pm UTC
*/

class ComprobanteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descrip_cmp',
        'incial'
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
        return Comprobante::class;
    }
}
