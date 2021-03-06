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
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
       <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/home">HORAS EXTRAS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   
                   
                
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                   
                </div>  


                <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/logo.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"> {{ Auth::user()->nombreEmpleado }}</h5>
                                   
                                </div>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-power-off mr-2"></i>Cerrar Sesion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }}
                                </form>
                            </div>
                        </li>

                  
                </div>
            
        
    </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Gestion de Solicitudes
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Ver Solicitudes</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="multiselect.html">Ver</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Crear Solicitud</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin_solicitudes.create') }}">Nueva</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Contenido </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Gestion de Solicitudes</a></li> 
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
                                    </ol>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <p class="text-aling">
                            

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse molestie volutpat vehicula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque semper purus augue, quis imperdiet leo dignissim quis. Suspendisse aliquam sapien quis nulla tincidunt, consectetur faucibus neque volutpat. Praesent eu eros urna. Nulla quis metus consequat diam cursus pharetra. Sed elementum magna leo, quis volutpat turpis dapibus nec. In semper erat vel aliquam mollis. In non imperdiet augue, id accumsan felis. Suspendisse non lorem ut nulla rhoncus blandit et consectetur elit. In ultricies commodo eros, a malesuada justo volutpat ac. Aenean in erat ex.  
<br>
<br>
Quisque molestie mauris ipsum, sed aliquet erat sollicitudin bibendum. Duis sollicitudin diam eget blandit porttitor. Nulla id elementum orci. Fusce a diam in eros eleifend tincidunt. Nulla varius ipsum vel iaculis rhoncus. Duis tempor, arcu ut ultrices accumsan, risus turpis tristique nunc, sit amet condimentum sem risus vitae metus. Integer consectetur eros tellus, et porttitor risus ullamcorper non. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean quis vulputate erat. Nam gravida a augue eu eleifend. Vestibulum vel mauris lorem. Cras lobortis ligula vitae enim sodales, ac venenatis ligula auctor. Nunc laoreet dolor sed fringilla convallis. Aliquam cursus nec diam at tempus.
<br>
<br>
Proin pretium sollicitudin dictum. Ut ultricies arcu sed enim pretium ullamcorper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce pretium purus eu dolor euismod porta. Quisque mollis vulputate lobortis. Etiam nec est eget ligula ornare tristique. Vivamus tempus felis erat. Duis ipsum turpis, ultrices et auctor vel, ornare vitae ligula. Fusce ultricies odio id euismod porttitor. Vestibulum tempor semper ligula, ut pharetra libero pretium dapibus. Cras vulputate est felis, faucibus fermentum leo venenatis vel. Sed quis diam cursus magna imperdiet gravida ac ac risus. Phasellus hendrerit posuere erat sit amet malesuada. 
                        </p>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            GRUPO DISATEL EL SALVADOR - SISTEMA DE HORAS EXTRAS.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="slimscroll/jquery.slimscroll.js"></script>
    <script src="libs/js/main-js.js"></script>
</body>
 
</html>