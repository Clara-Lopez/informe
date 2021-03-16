<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Informe
 * @package App\Models
 * @version September 17, 2020, 2:00 am UTC
 *
 * @property string $casos_total
 * @property string $activo
 * @property string $recuperado_por_dia
 * @property string $fallecido
 * @property string $casos_por_barrio
 * @property string $edad_promedio
 * @property string $genero
 * @property string $lugar_mas_afectado
 * @property string $fecha_actualizacion
 */
class Informe extends Model
{
    use SoftDeletes;

    public $table = 'informes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'casos_total',
        'activo',
        'recuperado_por_dia',
        'fallecido',
        'casos_por_barrio',
        'edad_promedio',
        'genero',
        'lugar_mas_afectado',
        'fecha_actualizacion'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'casos_total' => 'string',
        'activo' => 'string',
        'recuperado_por_dia' => 'string',
        'fallecido' => 'string',
        'casos_por_barrio' => 'string',
        'edad_promedio' => 'string',
        'genero' => 'string',
        'lugar_mas_afectado' => 'string',
        'fecha_actualizacion' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'casos_total' => 'required',
        'activo' => 'required',
        'recuperado_por_dia' => 'required',
        'fallecido' => 'required',
        'casos_por_barrio' => 'required',
        'edad_promedio' => 'required',
        'genero' => 'required',
        'lugar_mas_afectado' => 'required',
        'fecha_actualizacion' => 'required'
    ];

    
}
