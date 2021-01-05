<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Venta
 * @package App\Models
 * @version November 30, 2020, 9:12 pm UTC
 *
 * @property \App\Models\Cliente $idcliente
 * @property \App\Models\Comprobante $idcomprobante
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property integer $idcomprobante
 * @property string $numero
 * @property integer $idcliente
 * @property number $sub_tot
 * @property number $igv_tot
 * @property number $tot_tot
 * @property string $observacion
 */
class Venta extends Model
{
    //use SoftDeletes;

    public $table = 'venta';
    protected $primaryKey = 'idventa'; //cambie por el id de la tabla 

    public $timestamps = false;//no guarde actualizaciones de fecha 
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcomprobante',
        'numero',
        'idcliente',
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
        'idventa' => 'integer',
        'idcomprobante' => 'integer',
        'numero' => 'string',
        'idcliente' => 'integer',
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
        'idcliente' => 'nullable|integer',
        'sub_tot' => 'nullable|numeric',
        'igv_tot' => 'nullable|numeric',
        'tot_tot' => 'nullable|numeric',
        'observacion' => 'nullable|string|max:500'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idclientes()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'idcliente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcomprobante()
    {
        return $this->belongsTo(\App\Models\Comprobante::class, 'idcomprobante');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productos()
    {
        return $this->belongsToMany(\App\Models\Producto::class, 'ventadetalle');
    }
    public function details(){
        return $this->hasMany('\App\Models\Ventadetalle','idventa');
        //return $this->hasMany('App\Models\Ventadetalle');
        //return $this->belongsToMany(\App\Models\Ventadetalle::class, 'ventadetalle');
    }
    /*
    public function detail(){
        return $this->hasMany('App\InvoiceItem');
    }
    */
}
