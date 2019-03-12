

<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DISATEL</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/css/style.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="/login"><img class="logo-img" src="img/logo.png" width="100" height="70" alt="logo"></a></div>
            <div class="card-body">

                <!--Mensaje de error -->
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  <!--Seguridad Otorgada por blade -->

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        
                        <input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="Usuario" value="{{ old('username') }}" required autofocus>


                            @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                            @endif


                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Contraseña"  name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif

                    </div>
                    <div class="form-group">
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar Sesión</button>
                </form>
            </div>
            
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>

