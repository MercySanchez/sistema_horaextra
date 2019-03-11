@extends('layouts.app')



@section('content')

<section>

	<div class="alert alert-info">

		<strong>Ingresar datos para la solicitud de horas extras</strong>

	</div>

	<div class="container">    

		<div id="loginbox" style="margin-top:30px">                    

			<div class="panel panel-primary" >

				<div class="panel-heading">

					<div class="panel-title">Registrar Solicitud</div>

				</div>     



				<div style="padding-top:30px" class="panel-body" >



					<!--Mensaje de error -->

					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>



					<form class="form-horizontal" role="form" method="POST" action="{{ route('crearSolicitud') }}">

						{{ csrf_field() }}



						<div class="form-group">

							<label for="nombreEmpleado" class="col-md-4 control-label">Nombre Completo</label>

							<div class="col-md-6">

								<input id="nombreEmpleado" type="text" class="form-control" name="nombreEmpleado" value="{{ old('nombreEmpleado') }}" required autofocus>

							</div>

						</div>

						


						
						<div class="form-group">

							<div class="col-md-6 col-md-offset-4">

								<button type="submit" class="btn btn-success">

									Registrar

								</button>

							</div>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>

</section>

@endsection