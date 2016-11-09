<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorasDiariasTrabajadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas_diarias_trabajado', function (Blueprint $table) {
            $table->increments('id_hora_trabajada');
            $table->integer('id_fuente_calle',false,true);
            $table->integer('horas');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('horas_diarias_trabajados');
    }
}
