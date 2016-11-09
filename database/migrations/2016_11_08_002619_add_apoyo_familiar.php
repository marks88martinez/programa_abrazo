<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApoyoFamiliar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('create_apoyo_familiars', function (Blueprint $table) {
            $table->foreign('id_educador','apoyo_familiar_educador_fk')->references('id_datos_persona')->on('educador');


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
            $table->dropForeign('apoyo_familiar_educador_fk');

        });
    }
}
