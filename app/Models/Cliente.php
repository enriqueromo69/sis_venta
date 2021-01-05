<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version November 16, 2020, 10:13 pm UTC
 *
 * @property \App\Models\TipoClie $idtipodoc
 * @property \Illuminate\Database\Eloquent\Collection $celulars
 * @property string $razon_social
 * @property integer $idtipodoc
 * @property string $documento
 * @property string $correo
 */
class Cliente extends Model
{
    //use SoftDeletes;

    public $table = 'cliente';

    protected $primaryKey = 'idcliente'; //cambie por el id de la tabla 
    public $timestamps = false;//no guarde actualizaciones de fecha 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'razon_social',
        'idtipodoc',
        'documento',
        'correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcliente' => 'integer',
        'razon_social' => 'string',
        'idtipodoc' => 'integer',
        'documento' => 'string',
        'correo' => 'string'
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
        'correo' => 'nullable|string|max:200'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idtipodocs()
    {
        return $this->belongsTo(\App\Models\Tipo_clie::class, 'idtipodoc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function celulars()
    {
        return $this->hasMany(\App\Models\Celular::class, 'idcliente');
    }
}
