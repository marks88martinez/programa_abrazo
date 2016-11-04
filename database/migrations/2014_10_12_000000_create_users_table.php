<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_persona', function (Blueprint $table) {
            $table->increments('id_datos_persona');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ci');
            $table->date('fechanacimiento');
            $table->double('telefono');
            $table->string('tipo_cargo');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->integer('edad');
            $table->string('longitud');
            $table->string('latitud');
            $table->string('direccion');
            $table->char('sexo',1);
            $table->boolean('estado')->default(1);
            $table->rememberToken();
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
        Schema::drop('datos_persona');
    }
}
