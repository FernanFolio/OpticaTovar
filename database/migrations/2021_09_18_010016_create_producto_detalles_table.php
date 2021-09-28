<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_detalle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->references('id')->on('productos');
            $table->string('color', 50);
            $table->smallInteger('talla');
            $table->smallInteger('longitud_varilla');
            $table->smallInteger('ancho_puente');
            $table->smallInteger('ancho_total');
            $table->string('sku', 12);
            $table->string('foto')->nullable();
            $table->string('foto_public_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_detalles');
    }
}
