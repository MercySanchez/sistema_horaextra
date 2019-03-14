<?php

namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $path = '/admin_solicitudes';

    public function __construct(){
     
    }

    public function index()
    {
        //
        $solicitud = Solicitud::all();

        return view($this->path.'/admin_solicitudes')->with('solicitudes',$solicitudes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->path.'/crearSolicitud');
    }


    public function home()

    {

        return view('home');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $solicitud = new Solicitud();

         $solicitud->comentarioSolicitud=$request->comentarioSolicitud;
         $solicitud->estadoSolicitud    =$request->estadoSolicitud;
         $solicitud->horaInicio         =$request->horaInicio;
         $solicitud->horaFin            =$request->horaFin;
         $solicitud->fecha              =$request->fecha;

         $solicitud->idUsuario = $request->idUsuario;
         $solicitud->save();

        return redirect($this->path);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitud $solicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitud $solicitud)
    {
        //
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
