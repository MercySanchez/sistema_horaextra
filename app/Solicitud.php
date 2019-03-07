<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
     //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comentarioSolicitud', 'estadoSolicitud', 
        'horaInicio', 'horaFin', 'fechaActual',
        'idDepartamento',
    ];

    public $timestamps = false;
    protected $primaryKey = 'idSolicitud';
}
