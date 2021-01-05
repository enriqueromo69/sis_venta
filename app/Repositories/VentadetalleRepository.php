<?php

namespace App\Repositories;

use App\Models\Ventadetalle;
use App\Repositories\BaseRepository;

/**
 * Class VentadetalleRepository
 * @package App\Repositories
 * @version November 30, 2020, 9:13 pm UTC
*/

class VentadetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idventa',
        'idproducto',
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
        return Ventadetalle::class;
    }
}
