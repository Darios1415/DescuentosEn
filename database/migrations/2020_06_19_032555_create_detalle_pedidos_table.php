<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->bigIncrements('iddp')->comment('Numero identificador del detalle de pedidos');
            $table->string('nombre_ped')->comment('Nombre del pedido realizado');
            $table->double('precio_uni',5,2)->comment('Precio unitario del producto');
            $table->integer('cantidad')->comment('Cantidad de productos en el pedido');
            $table->integer('comision')->comment('Comision del pedido realizado');
            $table->string('iva')->comment('iva aplicado en el pedido realizado');
            $table->double('envio',5,2)->comment('Precio del envio del pedido');
            $table->double('subtotal',5,2)->comment('Subtotal del pedido relizado');
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
        Schema::dropIfExists('detalle_pedidos');
    }
}
