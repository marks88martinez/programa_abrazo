<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatoNinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato_nino', function (Blueprint $table) {
            $table->integer('id_datos_persona',false, true);
            $table->string('actividad');
            $table->string('responsable');
            $table->timestamps();
        });

        Schema::table('dato_nino', function (Blueprint $table) {
            $table->primary('id_datos_persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dato_nino');
    }
}
