<?php
use App\Solicitud;
?>

@extends('layout')

@section('content')

<section>
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Ingresar datos para solicitud de horas extras</h5>
                                <div class="card-body">
                                    <form action="#" id="basicform" data-parsley-validate="">
                                        
                                        <div class="form-group">
                                            <label for="inputUserName">Nombre Completo de Empleado</label>
                                            <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
                                        

                                        <div class="form-group">
                                            <label for="inputEmail">Email address</label>
                                            <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                                        </div>
                                        
                                        
                                        <div class="row">
                                            
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Registrar</button>
                                                    <button class="btn btn-space btn-secondary">Cancelar</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
</section>
@endsection
