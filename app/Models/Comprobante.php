<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comprobante
 * @package App\Models
 * @version November 17, 2020, 8:38 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $proveedors
 * @property string $descrip_cmp
 * @property string $incial
 */
class Comprobante extends Model
{
    //use SoftDeletes;

    public $table = 'comprobante';
    protected $primaryKey = 'idcomprobante'; //cambie por el id de la tabla 
    public $timestamps = false;//no guarde actualizaciones de fecha

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'descrip_cmp',
        'incial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcomprobante' => 'integer',
        'descrip_cmp' => 'string',
        'incial' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descrip_cmp' => 'nullable|string|max:25',
        'incial' => 'nullable|string|max:5'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function proveedors()
    {
        return $this->belongsToMany(\App\Models\Proveedor::class, 'compra');
    }
}
