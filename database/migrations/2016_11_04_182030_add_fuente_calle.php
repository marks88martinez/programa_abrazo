<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFuenteCalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fuente_calle', function (Blueprint $table) {
            $table->foreign('ideducador','fuente_calle_educador_fk')->references('id_datos_persona')->on('educador');

            $table->foreign('iddato_nino','fuente_calle_dato_nino_fk')->references('id_datos_persona')->on('dato_nino');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fuente_calle', function (Blueprint $table) {
            $table->dropForeign('fuente_calle_educador_fk');

            $table->dropForeign('fuente_calle_dato_nino_fk');

        });
    }
}
