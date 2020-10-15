<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('casos_total');
            $table->text('activo');
            $table->text('recuperado_por_dia');
            $table->text('fallecido');
            $table->text('casos_por_barrio');
            $table->text('edad_promedio');
            $table->text('genero');
            $table->text('lugar_mas_afectado');
            $table->date('fecha_actualizacion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('informes');
    }
}
