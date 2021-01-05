<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Celular
 * @package App\Models
 * @version November 16, 2020, 10:14 pm UTC
 *
 * @property \App\Models\Cliente $idcliente
 * @property integer $idcliente
 * @property string $celular
 */
class Celular extends Model
{
    //use SoftDeletes;

    public $table = 'celular';
    protected $primaryKey = 'idcelular'; //cambie por el id de la tabla 

    public $timestamps = false;//no guarde actualizaciones de fecha 
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idcliente',
        'celular'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcelular' => 'integer',
        'idcliente' => 'integer',
        'celular' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idcliente' => 'nullable|integer',
        'celular' => 'nullable|string|max:15'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'idcliente');
    }
}
