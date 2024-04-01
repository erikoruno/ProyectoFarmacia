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
            $table->bigIncrements('id');
            $table->string('nombreProd');
            $table->float('precio');

            $table->unsignedBigInteger('categoria_productos_id');
            $table->foreign('categoria_productos_id')->references('id')->on('categoria_productos')->onDelete('cascade');

            $table->unsignedBigInteger('laboratorios_id');
            $table->foreign('laboratorios_id')->references('id')->on('laboratorios')->onDelete('cascade');
          

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
