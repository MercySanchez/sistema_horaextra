<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="generator" content="Sistema de Horas Extras">
    <link rel="shortcut icon" href="{{ asset('img/logo.png')}}" type="image/x-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DISATEL</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
   
   {!!Html:: style('css/bootstrap.min.css')!!}
    {!!Html:: style('css/animate.min.css')!!}
    {!!Html:: style('css/style.css')!!}
    {!!Html:: style('css/mbr-additional.css')!!}
    

</head>
<body>
    <section>
        @include('modulos.cabecera')
    </section>

    <section class="engine"><a rel="external">Disatel</a></section><section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-6" style="background-image: url({{ ('img/fondo2.jpg')}}");>
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center mbr-after-navbar">
        @yield('content')
    </div>
</section>
<section>
    @include('modulos.pie')
</section>
    

</body>
</html>
