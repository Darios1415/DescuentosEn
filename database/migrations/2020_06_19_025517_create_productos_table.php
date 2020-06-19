<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('idpr')->comment('Numero identificador de productos');
            $table->string('nombre',10)->comment('Nombre de productos');
            $table->string('descripcion',250)->comment('Descripcion del producto');
            $table->integer('precio')->comment('Precio del producto');
            $table->integer('comision')->comment('Comision de productos');
            $table->integer('existencia')->comment('Numero de existencias deproducto');
            $table->string('descc')->comment('Descuento del producto al cliente');
            $table->string('descp')->comment('Descuento del productoalproveedor');
            $table->integer('cost_env')->comment('Costo del enviodel producto');
            $table->string('img')->comment('imagen del producto');
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
        Schema::dropIfExists('productos');
    }
}
