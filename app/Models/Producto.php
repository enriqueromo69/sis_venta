<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version November 9, 2020, 10:53 pm UTC
 *
 * @property string $nombre
 * @property string $marca
 * @property string $modelo
 * @property integer $cantidad
 * @property number $precio
 */
class Producto extends Model
{
    //use SoftDeletes;

    public $table = 'producto';
    
    protected $primaryKey = 'idproducto'; 
    public $timestamps = false; 

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'marca',
        'modelo',
        'cantidad',
        'precio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idproducto' => 'integer',
        'nombre' => 'string',
        'marca' => 'string',
        'modelo' => 'string',
        'cantidad' => 'integer',
        'precio' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'nullable|string|max:100',
        'marca' => 'nullable|string|max:100',
        'modelo' => 'nullable|string|max:100',
        'cantidad' => 'nullable|integer',
        'precio' => 'nullable|numeric'
    ];

    
}
