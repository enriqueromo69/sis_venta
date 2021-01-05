<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipo_clie
 * @package App\Models
 * @version November 16, 2020, 10:14 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $clientes
 * @property string $descrip_doc
 * @property string $caracteres
 */
class Tipo_clie extends Model
{
    //use SoftDeletes;

    public $table = 'tipo_clie';
    protected $primaryKey = 'idtipodoc'; //cambie por el id de la tabla 

    public $timestamps = false;//no guarde actualizaciones de fecha 
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descrip_doc',
        'caracteres'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idtipodoc' => 'integer',
        'descrip_doc' => 'string',
        'caracteres' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descrip_doc' => 'nullable|string|max:25',
        'caracteres' => 'nullable|string|max:5'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clientes()
    {
        return $this->hasMany(\App\Models\Cliente::class, 'idtipodoc');
    }

    public function proveedores(){
        return $this->hasMany(\App\Models\Proveedor::class,'idtipodoc');
    }
}
