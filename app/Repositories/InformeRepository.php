<?php

namespace App\Repositories;

use App\Models\Informe;
use App\Repositories\BaseRepository;

/**
 * Class InformeRepository
 * @package App\Repositories
 * @version September 17, 2020, 2:00 am UTC
*/

class InformeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Informe::class;
    }
}
