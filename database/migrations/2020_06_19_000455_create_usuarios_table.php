<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('idu')->comment('numero identificador del usuario');
            $table->string('nombre', 10)->comment('Nombre del administrador');
            $table->string('app',10)->comment('Apellido paterno del usuario');
            $table->string('apm',10)->comment('Apellido materno del usuario');
            $table->string('email',25)->comment('Correo Electronico del usuario');
            $table->string('pass',250)->comment('Contraseña del usuario');
            $table->integer('telefono')->comment('Numero telefonico del usuario');
            $table->unsignedBigInteger('idtu')->comment('Numero identificador del tipo de usuario');
            $table->foreign('idtu')->references('idtu')->on('tiposusuarios');
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
        Schema::dropIfExists('usuarios');
    }
}
