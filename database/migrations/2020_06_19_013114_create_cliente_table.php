<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->bigIncrements('idcl')->comment('Numero identificador del cliente');
            $table->string('nombre',10)->comment('Nombre del clienet');
            $table->string('app',10)->comment('Apellido paterno del cliente');
            $table->string('apm',10)->comment('Apellido materno del cliente');
            $table->string('email',25)->comment('Correo electronico del cliente');
            $table->string('pass',10)->comment('Contraseña del cliente');
            $table->string('telefono', 10)->comment('Numero telefonico del cliente');
            $table->string('colonia',15)->comment('Colonia del cliente');
            $table->string('calle',15)->comment('Calle del cliente');
            $table->integer('numint')->comment('Numero interior del cliente');
            $table->string('numext')->comment('Numero exterior del cliente');
            $table->integer('cp')->comment('Codigo postal del cliente');
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
        Schema::dropIfExists('cliente');
    }
}
