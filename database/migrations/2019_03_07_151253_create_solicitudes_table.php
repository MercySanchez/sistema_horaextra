<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('idSolicitud');
            $table->string('comentarioSolicitud');
            $table->string('estadoSolicitud')->default('Pendiente');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->date('fechaActual');
            $table->integer('idDepartamento')->unsigned();
            $table->foreign('idDepartamento')->references('idDepartamento')->on('departamentos');
            $table->integer('idEmpleado')->unsigned();
            $table->foreign('idEmpleado')->references('idEmpleado')->on('empleados');
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
        Schema::dropIfExists('solicitudes');
    }
}
