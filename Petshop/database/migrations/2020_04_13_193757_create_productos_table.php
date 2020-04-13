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
            $table->integer('estado'); //para ver cuales sew publican o no
            $table->string('nombre');
            $table->string('slug');
            $table->integer('categoria_id');
            $table->string('imagen');
            $table->decimal('precio', 11,2); //11 el numero de caracteres q puede tener, 2 el de decimales
            $table->integer('endescuento'); //tiene descuento?
            $table->integer('descuento'); //valor del descuento
            $table->text('contenido'); //descripcion
            $table->softDeletes();
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
