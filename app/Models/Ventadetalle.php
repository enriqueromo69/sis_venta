<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ventadetalle
 * @package App\Models
 * @version November 30, 2020, 9:13 pm UTC
 *
 * @property \App\Models\Producto $idproducto
 * @property \App\Models\Ventum $idventa
 * @property integer $idventa
 * @property integer $idproducto
 * @property integer $cantidad
 * @property number $prec_unit
 * @property number $tot_tot
 * @property string $observacion
 */
class Ventadetalle extends Model
{
    //use SoftDeletes;

    public $table = 'ventadetalle';
    protected $primaryKey = 'idventadeta'; //cambie por el id de la tabla 

    public $timestamps = false;//no guarde actualizaciones de fecha 
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idventa',
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
        'idventadeta' => 'integer',
        'idventa' => 'integer',
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
        'idventa' => 'nullable|integer',
        'idproducto' => 'nullable|integer',
        'cantidad' => 'nullable|integer',
        'prec_unit' => 'nullable|numeric',
        'tot_tot' => 'nullable|numeric',
        'observacion' => 'nullable|string|max:500'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idproductos()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'idproducto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idventa()
    {
        return $this->belongsTo(\App\Models\Venta::class, 'idventa');
    }
}
