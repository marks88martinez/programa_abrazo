<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResponsableFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('responsable', function (Blueprint $table) {
            $table->foreign('id_datos_persona','responsable_datos_personales_fk')->references('id_datos_persona')->on('datos_persona');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('responsable', function (Blueprint $table) {
            $table->dropForeign('responsable_datos_personales_fk');
        });
    }
}
