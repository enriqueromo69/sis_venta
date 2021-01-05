<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Compradetalle
 * @package App\Models
 * @version November 17, 2020, 8:39 pm UTC
 *
 * @property \App\Models\Compra $idcompra
 * @property \App\Models\Producto $idproducto
 * @property integer $idcompra
 * @property integer $idproducto
 * @property integer $idproveedor
 * @property integer $cantidad
 * @property number $prec_unit
 * @property number $tot_tot
 * @property string $observacion
 */
class Compradetalle extends Model
{
   // use SoftDeletes;

    public $table = 'compradetalle';
    protected $primaryKey = 'idcompra'; //cambie por el id de la tabla 
    public $timestamps = false;//no guarde actualizaciones de fecha

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcompra',
        'idproducto',
        'cantidad',
        'prec_unit',
        'tot_tot',
        'observacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcompradeta' => 'integer',
        'idcompra' => 'integer',
        'idproducto' => 'integer',
        'cantidad' => 'integer',
        'prec_unit' => 'decimal:2',
        'tot_tot' => 'decimal:2',
        'observacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcompra' => 'nullable|integer',
        'idproducto' => 'nullable|integer',
        'cantidad' => 'nullable|integer',
        'prec_unit' => 'nullable|numeric',
        'tot_tot' => 'nullable|numeric',
        'observacion' => 'nullable|string|max:500'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcompra()
    {
        return $this->belongsTo(\App\Models\Compra::class, 'idcompra');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproducto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'idproducto');
    }
}
