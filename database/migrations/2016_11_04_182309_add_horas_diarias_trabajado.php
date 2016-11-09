<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHorasDiariasTrabajado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('horas_diarias_trabajado', function (Blueprint $table) {
            $table->foreign('id_fuente_calle','fuente_calle_horas_trabajo_fk')->references('id_fuente_calle')->on('fuente_calle');


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
            $table->dropForeign('fuente_calle_horas_trabajo_fk');

        });
    }
}
