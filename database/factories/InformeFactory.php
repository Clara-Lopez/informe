<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Informe;
use Faker\Generator as Faker;

$factory->define(Informe::class, function (Faker $faker) {

    return [
        'casos_total' => $faker->text,
        'activo' => $faker->text,
        'recuperado_por_dia' => $faker->text,
        'fallecido' => $faker->text,
        'casos_por_barrio' => $faker->text,
        'edad_promedio' => $faker->text,
        'genero' => $faker->text,
        'lugar_mas_afectado' => $faker->text,
        'fecha_actualizacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
