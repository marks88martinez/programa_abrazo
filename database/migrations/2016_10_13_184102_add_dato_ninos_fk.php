<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatoNinosFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dato_nino', function (Blueprint $table) {
            $table->foreign('id_datos_persona', 'dato_nino_datos_personales_fk')->references('id_datos_persona')->on('datos_persona');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dato_nino', function (Blueprint $table) {
            $table->dropForeign('dato_nino_datos_personales_fk');
        });
    }
}
