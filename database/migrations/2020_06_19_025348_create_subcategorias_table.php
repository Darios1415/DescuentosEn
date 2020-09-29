<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategorias', function (Blueprint $table) {
            $table->bigIncrements('idsc')->comment('Numero identificador de subcategorias');
            $table->string('nombre',25)->comment('Nombre de la subcategoria');
            $table->string('ruta')->nullable()->comment('Imagen de subcategoria');
            $table->unsignedBigInteger('idc')->comment('Numero identificador de categoria');
            $table->foreign('idc')->references('idc')->on('categorias');
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
        Schema::dropIfExists('subcategorias');
    }
}
