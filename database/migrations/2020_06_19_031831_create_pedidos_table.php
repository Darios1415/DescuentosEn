<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('idpe')->comment('Numero identificador de pedidos');
            $table->integer('cantidad_items')->comment('Numero de items de los pedidos');
            $table->integer('total')->comment('Precio total del pedido realizado');
            $table->unsignedBigInteger('idprov')->comment('Numero identificador del proveedor');
            $table->unsignedBigInteger('idprod')->comment('Numero identificador del producto');
            $table->foreign('idprov')->references('idpr')->on('proveedor')->onDelete('cascade');
            $table->foreign('idprod')->references('idpr')->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('pedidos');
    }
}
