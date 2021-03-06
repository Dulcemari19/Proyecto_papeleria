<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAdmiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_admi', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',30);
            $table->string('apellidos',40);
            $table->string('direc',40);
            $table->string('tel',20)->nullable();
            $table->string('email',50);
            $table->string('pass',30);
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
        Schema::dropIfExists('tb_admi');
    }
}
