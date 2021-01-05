<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proveedor
 * @package App\Models
 * @version November 17, 2020, 8:38 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $comprobantes
 * @property string $razon_social
 * @property integer $idtipodoc
 * @property string $documento
 * @property string $correo
 * @property string $observacion
 */
class Proveedor extends Model
{
    //use SoftDeletes;

    public $table = 'proveedor';
    protected $primaryKey = 'idproveedor'; //cambie por el id de la tabla 
    public $timestamps = false;//no guarde actualizaciones de fecha
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'razon_social',
        'idtipodoc',
        'documento',
        'correo',
        'observacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idproveedor' => 'integer',
        'razon_social' => 'string',
        'idtipodoc' => 'integer',
        'documento' => 'string',
        'correo' => 'string',
        'observacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'razon_social' => 'nullable|string|max:1000',
        'idtipodoc' => 'nullable|integer',
        'documento' => 'nullable|string|max:15',
        'correo' => 'nullable|string|max:200',
        'observacion' => 'nullable|string|max:500'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function comprobantes()
    {
        return $this->belongsToMany(\App\Models\Comprobante::class, 'compra');
    }

    public function idtipodocs()
    {
        return $this->belongsTo(\App\Models\Tipo_clie::class, 'idtipodoc');
    }
}
