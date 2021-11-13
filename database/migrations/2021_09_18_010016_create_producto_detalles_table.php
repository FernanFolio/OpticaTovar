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
            $table->foreignId('image_id')->nullable()->constrained();
            $table->string('sku', 12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_detalle');
    }
}
