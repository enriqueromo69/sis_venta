<?php

namespace App\Repositories;

use App\Models\Venta;
use App\Repositories\BaseRepository;
use App\Models\Ventadetalle;

use DB;
/**
 * Class VentaRepository
 * @package App\Repositories
 * @version November 30, 2020, 9:12 pm UTC
*/

class VentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idcomprobante',
        'numero',
        'idcliente',
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
        return Venta::class;
    }


}
