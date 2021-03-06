<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->bigIncrements('ida')->comment('numero identificador del administrador');
            $table->string('nombre', 10)->comment('Nombre del administrador');
            $table->string('app',10)->comment('Apellido paterno del administrador');
            $table->string('apm',10)->comment('Apellido materno del administrador');
            $table->string('email',25)->comment('Correo Electronico del administrador');
            $table->string('pass',250)->comment('Contraseña del administrador');
            $table->integer('telefono')->comment('Numero telefonico del administrador');
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
        Schema::dropIfExists('administrador');
    }
}
