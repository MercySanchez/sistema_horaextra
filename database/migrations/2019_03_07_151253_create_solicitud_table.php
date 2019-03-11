<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->increments('idSolicitud');
            $table->string('comentarioSolicitud');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->date('fecha');
            $table->integer('estadoSolicitud')->default(0); //0 - pendiente, 1 - Aprobado, 2 - Rechazado
                       
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('id')->on('users');

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
        Schema::dropIfExists('solicitud');
    }
}
