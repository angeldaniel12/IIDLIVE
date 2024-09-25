<!-- vista para los seguidores en el perfil -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset ('img/IIDLIVE.png')}}">
  <title>
    IIDLIVE - Perfil
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset ('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset ('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset ('css/new/argon-dashboard.css?v=2.0.4')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6"></span>
  </div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{route('creadores')}}" target="_blank">
        <img src="{{ asset('img/IIDLIVE.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">IIDLIVE</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
    <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">General</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('creadores')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-home text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('salasNormal')}}">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-video text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">salas lives</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{ route ('lectura')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-images text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Post</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ route ('fotos')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-images text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Imagenes</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route ('docuementos')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-folder-open text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">documentos</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route ('videos')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-film text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Videos</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link " href="{{route ('videos')}}">
              <i class="ni ni-button-play text-black"></i>Videos
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link " href="{{route('lista')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user-plus text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Contactos</span>
            </a>
          </li>
    
        </ul>
         <!-- Divider -->
         <hr class="my-3">
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Tú</h6>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="{{ route('creador.posts.hh')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-newspaper text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Posts</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('creador.archivo.ver')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-film text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Rels</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route('creador.archivo.files')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-arrow-up text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Subir Archivos</span>
          </a>
        </li>
         <li class="nav-item">
          <a class="nav-link " href="{{route ('creador.archivo.vistaArch')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-folder text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Archivos</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="{{route('creador.archivo.ver')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-album-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Videos</span>
          </a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link " href="{{route ('creador.archivo.ima')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-image text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Imagenes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{route ('nuevo')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-layer-group text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Categorias</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/Categoria">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-tags text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Etiquetas</span>
          </a>
        </li>
      </ul>
    </div>
    @can('/')
    <div class="sidenav-footer mx-3 ">
      <div class="card card-plain shadow-none" id="sidenavCard">
        <img class="w-50 mx-auto" src="{{ asset('img/illustrations/icon-documentation.svg')}}" alt="sidebar_illustration">
        <div class="card-body text-center p-3 w-100 pt-0">
          <div class="docs-info">
            <h6 class="mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
    @endcan
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
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
                  @if (count(auth()->user()->unreadNotifications))
                      <span class="badge badge-warning">
                         {{count(auth()->user()->unreadNotifications)}}
                      </span>
                   @endif
              </a>
             
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              @forelse (auth()->user()->unreadNotifications as $notificacion)
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                    
                      <div class="my-auto">
                        <img src="{{ asset('uploads/avatars/'.$notificacion->fotos) }}" class="avatar avatar-sm  me-3 ">
                      </div>
                     
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">{{$notificacion->data['title']}}</span>
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          {{$notificacion->created_at->diffForHumans()}}
                        </p>
                        <a href="{{route('markAsRead')}}">Marcar como leidas</a>
                      </div>
                     
                    </div>
                  </a>
                </li>
                @empty
                @endforelse
              </ul>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
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
                
                <li class="nav-item">
                   <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " href="{{route('creador.user.PerfilEdit')}}">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Editar perfil</span>
                  </a>
                </li>
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
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Amigos</p>

              </div>
            </div>
            <div class="card-body">
              <div class="d-grid gap-2 d-md-block">
                <a href="{{route('seguidores')}}" class="btn btn-outline-primary" type="button">Seguidores</a>
                <a href="{{route('seguido')}}" class="btn btn-outline-secindary" type="button">Seguido</a>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <p class="text-uppercase text-sm text-muted mb-4">Seguidores</p>
                    <!-- lista de seguidores -->
                    @foreach ($followers as $follower)
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{ asset('uploads/avatars/'.$follower->fotos) }}" class="img-fluid rounded-start" alt="">
                        </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$follower->nombre}} <a href="{{ route('perfilusuarios', $user->id) }}" ></a></h5>
                            @if(auth()->user()->isNot($follower))
                      @if(auth()->user()->isFollowing($follower))
                          <form method="post" action="{{ route('unfollow', $follower) }}">
                              @csrf
                              <button class="btn btn-sm btn-danger" type="submit"><i class="fas fa-user-xmark"></i>Dejar de seguir</button>
                          </form>
                      @else
                          <form method="post" action="{{ route('follow', $follower) }}">
                              @csrf
                              <button class="btn btn-sm btn-success" type="submit">Seguir</button>
                          </form>
                      @endif
                    @endif
                            
                            </div>
                          </div>
                      </div>
                    </div>
                    <!-- <ul class="list-group">
                    
                      <li class="list-group-item"><img src="{{ asset('uploads/avatars/'.$follower->fotos) }}"  style="width: 10rem;" class="card-img-top" alt="avatar">{{$follower->nombre}}</li>
                    </ul> -->
                  
            @endforeach
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>

</div>

                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Mensaje
                  
                </a>
                 <!--abrir una ventana de mensajeria 1 a 1-->
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      @php
                        use App\Models\Follower;
                        $id=Auth::id();
                        $contador=Follower::where('following_id',$id)->count();
                      @endphp
                      <span class="text-lg font-weight-bolder">{{$contador}}</span>
                      <i>Seguidores</i>
                      <!-- <i class="dropdown-item" class="dropdow-item" data-bs-toggle="modal" data-bs-target="#seguidos">Seguidores</i> -->
                   
                  <div class="modal fade" id="seguidores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">lista de seguidores</h5>
        <button type="button" class="btn-close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="py-3 text-center">
  

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">cerrar</button>

      </div>
    </div>
  </div>
</div> 
                    </div>
                    <div class="d-grid text-center mx-4">
                      @php
                        use App\Models\Photo;
                        $id=Auth::id();
                        $imagen=Photo::where('user_id',$id)->count();
                        $sigue=Follower::where('follower_id',$id)->count();
                      @endphp
                      <span class="text-lg font-weight-bolder">{{$sigue}}</span>
                      <!-- <id class="dropdown-item" data-bs-toggle="modal" data-bs-target="#seguidos">Siguiendo  </i> -->
                      <i>Seguidos</i>
                      <!-- <i class="dropdown-item" class="dropdow-item" data-bs-toggle="modal" data-bs-target="#seguidos">Seguidores</i> -->
                  
                      

                  <div class="modal fade" id="seguidos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">lista de siguiendo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
      <div class="py-3 text-center">
     
      
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
                     
                    </div> 

                  

                    <div class="d-grid text-center">
                    @php
                    use App\Models\Post;
                    use Illuminate\Support\Facades\Auth;                  
                    $posts = Post::where('user_id',$id)->count();
                      
                    @endphp
                      <span class="text-lg font-weight-bolder">{{$posts}}</span>
                      <span class="text-sm opacity-8">Post</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                    @php
                    use App\Models\Video;
                    use App\Models\Archivos;
                    $videos = Video::where('user_id',$id)->count();
                    $archi = Archivos::where('user_id', $id)->count();
                    $seguir=Follower::where('following_id',$id)->count();
                    $imagen=Photo::where('user_id',$id)->count()
                    @endphp
                      <span class="text-lg font-weight-bolder">{{$videos+$imagen+$posts+$seguir+$archi}}</span>
                      <span class="text-sm opacity-8">Puntuación</span>
                    </div>
                    <!-- <div class="d-grid text-center mx-4">
                    @php
                    
                    $usuario=Auth::id();
                    $sigue=Follower::where('follower_id',$usuario)->count();
                    
                    @endphp
                      <span class="text-lg font-weight-bolder">{{$sigue}}</span>
                      <span class="text-sm opacity-8">Siguiendo</span>
                    </div> -->
                    
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
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
        <img src="{{ asset('img/IIDLIVE.png')}}" width="50" height="50">
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
  <script src="{{ asset ('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset ('js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset ('js/new/argon-dashboard.min.js?v=2.0.4')}}"></script>

</body>

</html>
