<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/svg" href=" assets/img/IIDLIVE.svg">
  <title>
    IIDLIVE - Perfil
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/css/normalize.css" rel="stylesheet">
    <link href="/css/framework.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/comentarios.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->

  <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link id="pagestyle" href="{{ asset ('css/new/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
  <style>
  
  </style>
</head>


<body class="g-sidenav-show bg-gray-100">
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" {{route('creadores')}}">
         <img src="{{ asset ('img/brand/IIDLIVE.png')}}" class="navbar-brand-img">
        <!--<img src="{{ asset('img/IIDLIVE.webp')}}" class="navbar-brand-img">-->
        <span class="ms-1 font-weight-bold text-pink ">IIDLIVE</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" " id="sidenav-collapse-main">
      <!-- inicio del menu  -->
      <ul class="navbar-nav mb-md-2">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('creadores')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
</svg>
              <!--<i class="bi bi-house text-primary text-sm opacity-10"></i>-->
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Mi sección</h6>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="{{route( 'perfil')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
</svg>
            </div>
            <span class="nav-link-text ms-1">Perfil</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="{{route('creador.publicacion.reels')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
  <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
</svg>
            </div>
            <span class="nav-link-text ms-1">Mis publicaciones</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="{{route ('nuevo')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers" viewBox="0 0 16 16">
  <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0zM8 9.433 1.562 6 8 2.567 14.438 6z"/>
</svg>
            </div>
            <span class="nav-link-text ms-1">Categorias</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/Etiqueta">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
  <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0"/>
  <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z"/>
</svg>
            </div>
            <span class="nav-link-text ms-1">Etiquetas</span>
          </a>
        </li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">General</h6>
        </li>
      
       
        <li class="nav-item">
            <a class="nav-link " href="{{ route ('lectura')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-post" viewBox="0 0 16 16">
  <path d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
</svg>
            </div>
            <span class="nav-link-text ms-1">Post</span>
            </a>
          </li>
       
         
          <li class="nav-item">
            <a class="nav-link " href="{{route ('videos')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play" viewBox="0 0 16 16">
  <path d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1m2.765 5.576A.5.5 0 0 0 6 7v5a.5.5 0 0 0 .765.424l4-2.5a.5.5 0 0 0 0-.848z"/>
  <path d="M1.5 14.5A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5zm13-1a.5.5 0 0 0 .5-.5V6a.5.5 0 0 0-.5-.5h-13A.5.5 0 0 0 1 6v7a.5.5 0 0 0 .5.5z"/>
</svg>
            </div>
            <span class="nav-link-text ms-1">Reels</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link " href="{{route('lista')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg>
            </div>
            <span class="nav-link-text ms-1">Contactos</span>
            </a>
          </li>
    
        </ul>
    </div>
      <!-- fin del menu -->
  
  </aside>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2 mt-n11">
      <div class="container-fluid py-1">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="text-white opacity-5" href="javascript:;">Pagina</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Perfil</li>
          </ol>
          <h6 class="text-white font-weight-bolder ms-2">Perfil</h6>
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
          </div>
          <ul class="navbar-nav justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li> -->
            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </a>
            </li>
             <li class="nav-item dropdown pe-2 d-flex align-items-center">
    <a  class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
</svg>
        @if (count(auth()->user()->followedPostsNotifications()))
            <span class="badge bg-danger">
                {{ count(auth()->user()->followedPostsNotifications()) }}
            </span>
        @endif
    </a>
    @if (count(auth()->user()->followedPostsNotifications()))
        <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton" style="max-height: 400px; overflow-y: auto;>
            @forelse (auth()->user()->followedPostsNotifications() as $notificacion)
                @php
                    $post = App\Models\Post::find($notificacion->data['post_id']);
                @endphp
                @if ($post)
                    <li class="mb-2">
                        <form action="{{ route('markAsRead', $notificacion->id) }}" method="POST">
                            @csrf
                            @method('POST')
                            <a class="dropdown-item border-radius-md">
                                <div class="d-flex py-1">
                                    <div class="my-auto d-flex flex-column align-items-center">
                                        <h7>{{ $notificacion->notifiable->nombre }}</h7>
                                        <img src="{{ asset('uploads/avatars/' . $notificacion->notifiable->fotos) }}" class="img-fluid avatar-xl" alt="Avatar">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center ms-3">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                        <span class="font-weight-bold">
                                            {{
                                                implode(' ', array_slice(str_word_count($notificacion->data['post_name'], 1), 0, 4))
                                            }}
                                        </span>
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            {{ $notificacion->created_at->diffForHumans() }}
                                        </p>
                                        <!-- Mostrar el contenido de la notificación -->
                                        <p> {{
                                          implode(' ', array_slice(str_word_count($notificacion->data['post_name'], 1), 0, 4))
                                          }}
                                        </p>
                                        <!-- Agregar un enlace para marcar la notificación como leída -->
                                        <button type="submit" class="btn btn-link">Marcar como leída</button>
                                    </div>
                                </div>
                            </a>
                        </form>
                    </li>
                @endif
            @empty
                <!-- Manejar el caso en que no haya notificaciones -->
            @endforelse
        </ul>
    @endif
</li>
            <!--menu para configuraciones-->
           
            <li class="nav-item dropdown px-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-white p-0" id="fixedPluginDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
        </svg>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="fixedPluginDropdown">
        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
            </svg>  Salir</a></li>
        <li><a class="dropdown-item" href="/ajustes">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
</svg> Configuracion</a></li>
        <li><a class="dropdown-item" href="#"> </a></li>
    </ul>
</li>
        <!--fin de menu -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom w-auto">
      <div class="card-body w-auto">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="{{ asset('uploads/avatars/'.Auth::user()->fotos)}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
               {{auth()->user()->nombre}}
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
             {{auth()->user()->nombreusuario}}
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                
                
                   <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " href="{{route('creador.user.PerfilEdit')}}">
                    <i class=></i>
                    <span>Editar Perfil</span>
                  </a>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card w-auto">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Mi Cuenta</p>

              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm text-muted mb-4">Informacion del Usuario</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label" readonly="readonly">Nombre</label>
                    <input class="form-control" type="text" readonly="readonly" value="{{auth()->user()->nombre }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label" readonly="readonly">Nombre de Usuario</label>
                    <input class="form-control" type="text" readonly="readonly" value="{{auth()->user()->nombreusuario}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label" readonly="readonly">Fecha de Nacimiento</label>
                    <input class="form-control" type="text" readonly="readonly" value="{{auth()->user()->fechanac}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label" readonly="readonly">Correo Electronico</label>
                    <input class="form-control" type="email" readonly="readonly" value="{{auth()->user()->email}}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Informacion de Contacto</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label" >Dirección</label>
                    <input class="form-control" readonly="readonly" type="text" readonly="readonly" value="{{auth()->user()->direccion}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Pais</label>
                    <input class="form-control" type="text" readonly="readonly" value="{{auth()->user()->pais}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Ciudad</label>
                    <input class="form-control" type="text" readonly="readonly" value="{{auth()->user()->ciudad}}">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Codigo Postal</label>
                    <input class="form-control" type="text" readonly="readonly" value="{{auth()->user()->codigopostal}}">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Acerca de mi</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Acerca de mi</label>
                    <textarea style="overflow:auto;resize:none" rows="4" name="descripcion" class="form-control form-control-alternative" readonly>{{Auth::user()->descripcion}}</textarea>

                    <!--<textarea class="from-control" row="50" cols="50" readonly >{{auth()->user()->descripcion}}</textarea>-->
                    <!--<input class="form-control" type="text" readonly="readonly" value="{{auth()->user()->descripcion}}">-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile w-auto">
            <img src="{{ asset ('img/bg-profile.jpg')}}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="{{ asset('uploads/avatars/'.Auth::user()->fotos)}}" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <div class="d-flex justify-content-between">
                <button href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Contacto</button> <!--se pondra un modal con su correo -->
                <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Infromacion del contacto</h5>

      </div>

      <div class="modal-body">
      <div class="form-group" {{$errors ->has('title')? 'has-error' : ''}}>
                        <label class="form-control-label" for="input-username">Nombre: </label>
                        <label for="form-control-label">{{auth()->user()->nombre}}</label>
                        <label  class="form-control"></label> 
                        <label class="form-control-label" for="input-username">Usuario: </label>
                        <label for="form-control-label">{{auth()->user()->nombreusuario}}</label>
                        <label  class="form-control"></label>
                        <label class="form-control-label" for="input-username">Correo: </label>
                        <label for="form-control-label">{{auth()->user()->email}}</label>
                        <label  class="form-control"></label>
                        <label class="form-control-label" for="input-username">Estado: </label>
                        <label for="form-control-label">{{auth()->user()->ciudad}}</label>
                        {!! $errors->first('title','<span class="help-block">:message</span>')!!}
                      </div>
      </div>
     
    </div>
  </div>

</div>

                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i>contacto</a>
                <a href="{{route('seguidores')}}" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Amigos
               </a>
                 <!--abrir una ventana de mensajeria 1 a 1-->
                <a href="{{route('seguidores')}}" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i>Amigos</a>
              </div>
            </div>
            <div class="card-body pt-0">
               <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="d-flex justify-content-between flex-wrap" style="max-width: 800px;">
                    <div class="d-grid text-center ">
                        @php
                            use App\Models\Follower;
                            $id = Auth::id();
                            $contador = Follower::where('following_id', $id)->count();
                        @endphp
                        <span class="text-lg font-weight-bolder">{{$contador}}</span>
                        <i class="dropdown-item">Seguidores</i>
                    </div>
                    <div class="d-grid text-center mx-2">
                        @php
                            use App\Models\Photo;
                            $imagen = Photo::where('user_id', $id)->count();
                            $sigue = Follower::where('follower_id', $id)->count();
                        @endphp
                        <span class="text-lg font-weight-bolder">{{$sigue}}</span>
                        <i>Seguidos</i>
                    </div>
                    <div class="d-grid text-center ">
                        @php
                            use App\Models\Post;
                            $posts = Post::where('user_id', $id)->count();
                        @endphp
                        <span class="text-lg font-weight-bolder">{{$posts}}</span>
                        <i>Post</i>
                    </div>
                    <div class="d-grid text-center mx-2">
                        @php
                            use App\Models\Video;
                            use App\Models\Archivos;
                            $videos = Video::where('user_id', $id)->count();
                            $archi = Archivos::where('user_id', $id)->count();
                            $seguir = Follower::where('following_id', $id)->count();
                            $imagen = Photo::where('user_id', $id)->count();
                        @endphp
                        <span class="text-lg font-weight-bolder">{{$videos + $imagen + $posts + $seguir + $archi}}</span>
                        <i>Puntuación</i>
                    </div>
                </div>
            </div>
        </div>
              <div class="text-center">
                <h5>
                Nombre: {{auth()->user()->nombre}}<span class="font-weight-light"></span>
                </h5>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2">Ciudad: </i> {{auth()->user()->ciudad}}
                </div>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2">Pais: </i> {{auth()->user()->pais}}
                </div>
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2">Registro: </i>{{auth()->user()->created_at}}
                </div>
                <div>
                  <i class="ni education_hat mr-2">Sobre mi: </i>{{auth()->user()->descripcion}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
               Hecho por
                <a  class="font-weight-bold" target="_blank">IIDLIVE</a>
                para mejorar la web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a  class="nav-link text-muted" target="_blank">IIDLIVE</a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a  class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- fin -->
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="">
        <img src="{{ asset ('img/brand/IIDLIVE.png')}}" width="50" height="50">
      </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configuración de Pantalla</h5>
          <p>Personaliza tu Dashboard</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Barra Lateral</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Barra de tareas</h6>
          <p class="text-sm">Elige el modo de tu preferencia</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">Claro</button>
          <button class="btn bg-gradient-dark w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Oscuro</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Modo Nocturno</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="{{route('creadores')}}">Incio</a>
        <a class="btn btn-outline-dark w-100" href="/ajustes">Configuración</a>
        <a class="btn bg-gradient-dark w-100" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
    </a>
        <!-- <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div> -->
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset ('js/core/popper.min.js')}}"></script>
  <script src="{{ asset ('js/core/bootstrap.min.js')}}"></script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset ('js/new/argon-dashboard.min.js?v=2.0.4')}}"></script>
<script>document.addEventListener('DOMContentLoaded', function() {
    var menuToggle = document.getElementById('menu-toggle');
    var dropdownMenu = document.getElementById('dropdown-menu');

    menuToggle.addEventListener('click', function() {
        var isVisible = dropdownMenu.style.display === 'block';
        dropdownMenu.style.display = isVisible ? 'none' : 'block';
    });

    document.addEventListener('click', function(event) {
        if (!menuToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = 'none';
        }
    });
});</script>
</body>

</html>