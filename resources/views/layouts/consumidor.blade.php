<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
  IIDLIVE
  </title>
  <!-- Favicon -->
  <link href="{{ asset ('img/brand/IIDLIVE.PNG')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <!-- <link href="{{asset ('js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{ asset ('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" /> -->
  <!-- CSS Files -->
  <link href="{{ asset ('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
  <link href="/css/normalize.css" rel="stylesheet">
    <link href="/css/framework.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/comentarios.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <!-- Favicon -->
  
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset ('js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
  <link href="{{ asset ('js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset ('css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand-->
      <a class="navbar-brand pt-0" >
        <img src="{{ asset ('img/brand/IIDLIVE_1.png')}}" class="navbar-brand-img"> <!--imagen de logotipo-->
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Accion</a>
            <a class="dropdown-item" href="#">Otras acciones</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img  src="{{ asset('uploads/avatars/'.Auth::user()->fotos) }}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="{{route ('perfil') }}" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>Mi perfil</span>
            </a>
            <!-- <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Suppor  t</span>
            </a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
              </form>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="#">
              <img src="{{ asset ('img/brand/IIDLIVE_1.png')}}" class="navbar-brand-img"> <!--imagen de logotipo-->

              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="{{route('salasNormal')}}">
              <i class="fas fa-headphones text-green"></i> Salas de Live
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route ('fotos')}}">
              <i class="ni ni-album-2 text-black"></i> Galerias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route ('docuementos')}}">
              <i class="ni ni-folder-17 text-yellow"></i> Documentos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route ('videos')}}">
              <i class="ni ni-button-play text-black"></i>Post
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link " href="{{route ('videos')}}">
              <i class="ni ni-button-play text-black"></i>Videos
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link " href="{{route('lista')}}">
              <i class="ni ni-planet text-blue"></i> Contactos
            </a>
          </li>

          <li class="nav-item">
          <!-- <a class="nav-link " href="{{route('salachatt')}}"> -->
            <!-- <a class="nav-link " href="{{route('chats')}}"> -->
              <a class="nav-link" href="#">
              <i class="ni ni-send text-blue"></i> Salas de chat
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link " href="{{ route ('socialit')}}">
              <i class="ni ni-pin-3 text-orange"></i> Social
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route ('tecnology')}}">
              <i class="ni ni-single-02 text-yellow"></i> Tecnologico
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route ('academic')}}">
              <i class="ni ni-bullet-list-67 text-red"></i> Academico
            </a>
          </li>
          -->
        
        </ul>
        
        <!--parte para empezar como creador-->
        <ul class="navbar-nav">
          
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route ('creadores')}}"> <!--redirigir para hacer crador -->
              <i class="ni ni-active-40 text-blue"></i> Inicio Creador
            </a>
</ul>
        
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{route ('home')}}">Dashboard</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" action="{{ route('searchNormal') }}" method="POST">
          @csrf
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text" name="query">
            </div>
          </div>
        </form> 
      
         <!-- User -->
         <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-lg rounded-circle">
                  <img alt="Image placeholder" src="{{ asset('uploads/avatars/'.Auth::user()->fotos) }}"  class="img-fluid avatar-lg rounded-circle">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->nombre }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Bienvenido!</h6>
              </div>
              <a href=" {{route ('perfil') }} " class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Mi perfil</span>
              </a>
<!--               
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Ajustes</span>
              </a>
              <a href="./examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Actividad</span> -->
              </a>
              
              <div class="dropdown-divider"></div>
              <a  class="dropdown-item" href="{{ route('login') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="ni ni-user-run"></i>
                <span>Salir</span> 
                <form id="logout-form" action="{{ route('login') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-4 pt-md-6">
     


    </div>
    <div class="container-fluid mt--7">
    @yield('content')


      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2022 <a href="#" class="font-weight-bold ml-1" target="_blank">IIDLIVE</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">IIDLIVE</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="{{ asset ('js/plugins/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset ('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!--   Optional JS   -->
  <!-- <script src=" {{ asset ('js/plugins/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset ('js/plugins/chart.js/dist/Chart.extension.js') }}"></script>  -->
  <!--   Argon JS   -->
  <script src="{{ asset ('js/argon-dashboard.min.js?v=1.1.2') }}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>


</body>

</html>