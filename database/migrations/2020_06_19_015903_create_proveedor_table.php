<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->bigIncrements('idpr')->comment('Numero identificador del proveedor');
            $table->string('marca',10)->comment('Marca del prooveedor');
            $table->integer('clabe')->comment('clabe del prooveedor');
            $table->string('colonia', 10)->comment('Colonia del prooveedor');
            $table->integer('numint')->comment('Numero interior del prooveedor');
            $table->string('numext')->comment('Numero exterior del prooveedor');
            $table->integer('cp')->comment('Codigo postal del prooveedor');
            $table->string('logo')->comment('logotipo del prooveedor');
            $table->unsignedBigInteger('idm')->comment('Numero identificador del municipio');
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
        Schema::dropIfExists('proveedor');
    }
}
