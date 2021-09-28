<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->float('precio');
            $table->string('descripcion');
            $table->foreignId('tipo_armazon_id')->references('id')->on("tipos_armazon");
            $table->foreignId('marca_id')->constrained();
            $table->foreignId('categoria_id')->constrained();
            $table->foreignId('forma_id')->constrained();
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
