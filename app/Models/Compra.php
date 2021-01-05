<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Compra
 * @package App\Models
 * @version November 17, 2020, 8:39 pm UTC
 *
 * @property \App\Models\Comprobante $idcomprobante
 * @property \App\Models\Proveedor $idproveedor
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property integer $idcomprobante
 * @property string $numero
 * @property integer $idproveedor
 * @property number $sub_tot
 * @property number $igv_tot
 * @property number $tot_tot
 * @property string $observacion
 */
class Compra extends Model
{
    //use SoftDeletes;

    public $table = 'compra';
    protected $primaryKey = 'idcompra'; //cambie por el id de la tabla 
    public $timestamps = false;//no guarde actualizaciones de fecha 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcomprobante',
        'numero',
        'idproveedor',
        'sub_tot',
        'igv_tot',
        'tot_tot',
        'observacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcompra' => 'integer',
        'idcomprobante' => 'integer',
        'numero' => 'string',
        'idproveedor' => 'integer',
        'sub_tot' => 'decimal:2',
        'igv_tot' => 'decimal:2',
        'tot_tot' => 'decimal:2',
        'observacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcomprobante' => 'nullable|integer',
        'numero' => 'nullable|string|max:45',
        'idproveedor' => 'nullable|integer',
        'sub_tot' => 'nullable|numeric',
        'igv_tot' => 'nullable|numeric',
        'tot_tot' => 'nullable|numeric',
        'observacion' => 'nullable|string|max:500'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcomprobante()
    {
        return $this->belongsTo(\App\Models\Comprobante::class, 'idcomprobante');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproveedor()
    {
        return $this->belongsTo(\App\Models\Proveedor::class, 'idproveedor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productos()
    {
        return $this->belongsToMany(\App\Models\Producto::class, 'compradetalle');
    }
}
