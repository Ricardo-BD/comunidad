<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudadanos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellidoP');
            $table->string('apellidoM');
            $table->integer('idbarrio')->unsigned();
            $table->foreign('idbarrio')->references('id')->on('barrios')->onDelete('cascade');
            $table->integer('idcargo')->unsigned();
            $table->foreign('idcargo')->references('id')->on('cargos')->onDelete('cascade');
            $table->integer('idactividad')->unsigned()->nullable();
            $table->foreign('idactividad')->references('id')->on('actividades')->onDelete('cascade');
            $table->string('estatus')->defaul('No pagada');
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
        Schema::dropIfExists('ciudadanos');
    }
}
