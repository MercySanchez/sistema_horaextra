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
        'idUsuario','comentarioSolicitud', 'estadoSolicitud', 
        'horaInicio', 'horaFin', 'fecha',
        
    ];

    protected $table = 'solicitud';
    protected $primaryKey = 'idSolicitud';
    public $timestamps = false;
    
}
