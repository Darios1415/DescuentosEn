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
            $table->unsignedBigInteger('idm')->nullable()->comment('Numero identificador del municipio');
            $table->string('colonia',15)->nullable()->comment('Colonia del cliente');
            $table->string('calle',15)->nullable()->comment('Calle del cliente');
            $table->integer('numint')->nullable()->comment('Numero interior del cliente');
            $table->string('numext')->nullable()->comment('Numero exterior del cliente');
            $table->integer('cp')->nullable()->comment('Codigo postal del cliente');
            $table->string('img')->nullable()->comment('Imagen del cliente');
            $table->unsignedBigInteger('idu')->comment('Numero identificador del usuario');
            $table->foreign('idu')->references('idu')->on('usuarios')->onDelete('cascade');
            $table->foreign('idm')->references('idm')->on('municipio');
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
