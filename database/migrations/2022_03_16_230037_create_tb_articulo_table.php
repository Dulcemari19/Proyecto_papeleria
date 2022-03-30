<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_articulo', function (Blueprint $table) {
            $table->id('id_articulo');
            $table->text('img');
            $table->string('nombre', 255);
            $table->string('des', 200);
            $table->string('color');
            $table->float('precio', 10, 2);
            $table->string('tipo', 30);
            $table->string('marca', 30);
            $table->string('tamaño', 255);
            $table->string('id_categoria');
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
        Schema::dropIfExists('tb_articulo');
    }
}
