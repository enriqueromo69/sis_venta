<?php

namespace App\Repositories;

use App\Models\Compradetalle;
use App\Repositories\BaseRepository;

/**
 * Class CompradetalleRepository
 * @package App\Repositories
 * @version November 17, 2020, 8:39 pm UTC
*/

class CompradetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcompra',
        'idproducto',
        'idproveedor',
        'cantidad',
        'prec_unit',
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
        return Compradetalle::class;
    }
}
