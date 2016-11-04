<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEducadorFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('educador', function (Blueprint $table) {
          $table->foreign('id_datos_persona','educador_datos_personales_fk')->references('id_datos_persona')->on('datos_persona');
            $table->foreign('id_responsable','educador_responsable_fk')->references('id_datos_persona')->on('responsable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('educador', function (Blueprint $table) {
          $table->dropForeign('educador_datos_personales_fk');
          $table->dropForeign('educador_responsable_fk');
        });
    }
}
