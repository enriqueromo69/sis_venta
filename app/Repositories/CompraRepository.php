<?php

namespace App\Repositories;

use App\Models\Compra;
use App\Repositories\BaseRepository;

/**
 * Class CompraRepository
 * @package App\Repositories
 * @version November 17, 2020, 8:39 pm UTC
*/

class CompraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcomprobante',
        'numero',
        'idproveedor',
        'sub_tot',
        'igv_tot',
        'tot_tot',
        'observacion'
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
        return Compra::class;
    }
}
