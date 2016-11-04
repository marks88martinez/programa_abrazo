<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educador', function (Blueprint $table) {
            $table->integer('id_datos_persona', false, true);
            $table->integer('id_responsable', false, true);
            $table->timestamps();

        });

        Schema::table('educador', function (Blueprint $table) {
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
        Schema::drop('educador');
    }
}
