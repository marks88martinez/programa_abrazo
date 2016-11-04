<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuenteCallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuente_calle', function (Blueprint $table) {
            $table->increments('id_fuente_calle');
            $table->integer('ideducador',false,true);
            $table->integer('centro');
            $table->text('foco');
            $table->text('procedencia');
            $table->integer('iddato_nino',false,true);
            $table->integer('idhoras_diarias_trabajada', false, true)->nullable();
            $table->text('observacion');
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
        Schema::drop('fuente_calle');
    }
}
