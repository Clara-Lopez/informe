<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version September 17, 2020, 2:00 am UTC
 *
 * @property string $nombre
 * @property string $ciudad
 * @property string $email
 */
class Usuario extends Model
{
    use SoftDeletes;

    public $table = 'usuarios';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'ciudad',
        'email',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'ciudad' => 'string',
        'email' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'ciudad' => 'required',
        'email' => 'required',
    ];

    
}
