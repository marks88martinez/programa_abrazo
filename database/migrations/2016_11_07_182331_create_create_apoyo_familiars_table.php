<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateApoyoFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_apoyo_familiars', function (Blueprint $table) {
            $table->increments('id_apoyo_familiars');
            $table->integer('id_educador',false,true);
            $table->text('centro');
            $table->text('nombre_titular');
            $table->text('domicilio');
            $table->integer('visita_numero');
            $table->integer('etapa_seguimiento');
            $table->integer('dimensiones_t');
            $table->text('Descripción');
            $table->text('resultados');
            $table->text('acuerdos');
            $table->date('proxima_visita');


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
        Schema::drop('create_apoyo_familiars');
    }
}
