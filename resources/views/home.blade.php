@extends('layouts.panel2') <!-- La vista de la que se va a heredar es panel,
buscar la forma de darle funcion a los botones de acuerdo a lo que ya tenemos desde la vista Panel -->

<!--<link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">-->
@section('content')
<!-- Pegamos el codigo del Container-->
    <!-- End Navbar -->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card w-auto">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0  font-weight-bold">Seguidores</p>
    
                      <h5 class="font-weight-bolder">{{ $seguidoress }}</h5>
                
            
               <!-- <div class="progress">
                 <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                </div>
                  </div> -->
                    </h5>
                    <p class="mb-0">
                      <!-- <span class="text-success text-sm font-weight-bolder">+55%</span>
                      since yesterday -->
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
</svg></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card w-auto">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize  font-weight-bold">Seguidos</p>
                   
                    <h5 class="font-weight-bolder">
                    {{$seguidos}}
                    </h5>

                    <p class="mb-0">

                      <!-- <span class="text-success text-sm font-weight-bolder">+3%</span>
                      since last week -->
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                   <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
</svg></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card w-auto">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0  font-weight-bold">Posts compartidos</p>
                   
                    <h5 class="font-weight-bolder">
                    {{$postess}}
                    </h5>
                    <p class="mb-0">
                      <!-- <span class="text-success text-sm font-weight-bolder">+2%</span>
                      since last quarter -->
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-post" viewBox="0 0 16 16">
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
  <path d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5"/>
</svg></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card w-auto">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Videos</p>
                   
                    <h5 class="font-weight-bolder">
                    {{$videos}}
                    </h5>
                    <p class="mb-0">

                      <!-- <span class="text-success text-sm font-weight-bolder">+5%</span> than last month -->
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection-play" viewBox="0 0 16 16">
  <path d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3m2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1m2.765 5.576A.5.5 0 0 0 6 7v5a.5.5 0 0 0 .765.424l4-2.5a.5.5 0 0 0 0-.848z"/>
  <path d="M1.5 14.5A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5zm13-1a.5.5 0 0 0 .5-.5V6a.5.5 0 0 0-.5-.5h-13A.5.5 0 0 0 1 6v7a.5.5 0 0 0 .5.5z"/>
</svg></i>


                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>


     <!-- 2do panel -->

              <div class="row">
              <h2>Influenzometro</h2>
              <div class="progress-wrapper">
                  <div class="progress-info">
                      <div class="progress-percentage">
              <!--  -->
                          <span class="text-sm font-weight-bold text-white">{{$videos+$seguidoress+$postess+$seguidos}}%</span>
                        </div>
                 </div>
                <div class="progress">
                  <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="1" style="width: {{$influencer}};"></div>
                </div>
              </div>
    </div>

</div>
<!-- Modal -->
@if (!Cookie::has('categories_selected'))
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Selecciona tus categorías de tu preferencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="model-header">
            <span class="badge text-bg-warning text-center" style="text-transform: capitalize; display: block; margin: auto;">Es necesario seleccionar para que no te aparezca más</span>

                </div>
            <div class="modal-body">
                <form id="categoryForm" action="{{ route('save-categories') }}" method="POST">
                    @csrf
                    <div class="form-check form-check-inline">
                    @foreach($categories as $category)
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" name="categories[]" id="category_{{ $category->id }}" value="{{ $category->id }}">
        <label class="form-check-label" for="category_{{ $category->id }}">{{ $category->nameCategoria }}</label>
    </div>
@endforeach
                  </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" onclick="saveCategories()">Siguiente</button>
            </div>
        </div>
    </div>
</div>
@endif
<!-- dd -->
<div class="row">
    <div class="col-md-4">
        <!-- Primer formulario -->
        <form action="{{ route('creador.posts.nuevo') }}" method="POST" enctype="multipart/form-data" class="formulario-editar">
    @csrf

            <div class="card card-frame w-auto">
            <div class="modal-header-center text-center">
        <h7 class="modal-title" >Crea tu publicación</h7>
    
    </div>
   <span class="badge text-bg-warning"  style="text-transform: capitalize;">Es necesario categoria</span>
    
            <div class="card-body">
    <!-- <span class="badge bg-light text-dark d-block text-left" style="text-transform: none;">Es necesario poner seleccionar una categoria y etiquetas para hacer el posteo.</span> -->
    
    <div class="mb-3">
        <label >Contenido</label>
        <textarea id="message" class="form-control" id="content" name="content" placeholder="¿Qué pasa por tu mente?" rows="3" >{{ old('content') }}</textarea>
  
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Imagen (opcional)</label>
        <input type="file" class="form-control" id="image" name="image">
        {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
    </div>

    <div class="mb-3">
        <label for="categoria" class="form-label">Categorías</label>
        <select class="form-select" id="categoria" name="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nameCategoria }}</option>
            @endforeach
        </select>
        
    </div>

    <div class="mb-3" id="etiquetas">
        <label for="etiquetas" class="form-label">Etiquetas</label>
       
    </div>

    @if(session('postnuevo'))
        <div class="alert alert-success">
            {{ session('postnuevo') }}
        </div>
    @endif

    <button type="submit" class="btn btn-primary">Crear publicación</button>
                    <!-- Contenido del primer formulario -->
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4">
      
    <!-- Segundo formulario -->
    <form enctype="multipart/form-data" action="{{ route ('creador.archivo.cargar') }}"  method="POST" >
        @csrf
        <div class="card card-frame w-auto">
        <div class="modal-header-center text-center">
        <h7 class="modal-title" >Sube tu reel</h7>
    </div>
            <div class="card-body">
                <div class="modal-body" style="">
                    <div class="form-group">
                        <label for="name">Descripción</label>
                        <textarea id="descripcion" style="overflow:auto;resize:none" rows="4" name="descripcion" class="form-control form-control-alternative" maxlength="190"></textarea>
                        <span class="help-block">
                            <p id="mensaje_ayuda" class="help-block"></p>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Reels</label>
                       
                        <input type="file" class="form-control" id="video" name="video" accept="video/mp4" required>
             
                         @if(session('video'))
                                <div class="alert alert-success">
                                    {{ session('video') }}
                                </div>
                            @endif
                        
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary" id="btn-register" name="btn-register">Subir</button>
                </div>
                <!-- Contenido del segundo formulario -->
            </div>
        </div>
    </form>
</div>

    <div class="col-md-4">
         <!--Tercer formulario-->
        <form enctype="multipart/form-data" action="{{ route('creador.archivo.store') }}" class="formulario-imagen" method="POST">
            @csrf
            <div class="card card-frame w-auto">
            <div class="modal-header-center text-center">
        <h7 class="modal-title" >Sube tu historia</h7>
    </div>
                <div class="card-body">
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" style="overflow:auto;resize:none" rows="4" name="descripcion" class="form-control form-control-alternative" maxlength="140"></textarea>
                </div>
                <div class="form-group">
                    <label for="img">Imágen</label>
                    <input type="file" class="form-control input-file" id="img" name="img" accept="image/*" required style="padding: 0.5rem; border: 1px solid #ced4da; border-radius: 0.375rem;">
                 
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Subir</button>
                </div>
                    <!-- Contenido del tercer formulario -->
                </div>
            </div>
        </form>
    </div>
</div>
 <!-- Mostrar foto de perfil del usuario -->
     <div class="card w-auto" style="width: 30rem;">
  <div class="card-body">
  <h7>Mis Historias</h7>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  @foreach ($misHistorias as $index => $historia)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset($historia['url']) }}" class="d-block mx-auto" alt="Historia" style="width: 20rem; height: 20rem;">
                        <div class="carousel-caption d-none d-md-block">
                            
                        </div>
                        <h5>{{ $historia['descripcion'] }}</h5>
                    </div>
                @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
</div>
    


<!-- seccion de amigos -->
<div class="row mt-4">
      
       <div class="col-lg-7 mb-lg-0 mb-4">
           <div class="card w-auto">
    <div class="card w-auto">
        <h6 class="text-capitalize center">Sugerencia de amigos</h6>
        <p class="text-sm mb-0">
            <span class="font-weight-bold"></span> 
        </p>
    </div>
    <div class="card-body p-md-3 p-1" style="height: 400px; overflow-y: auto;">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($users as $user)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top" alt="avatar" style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>
                        <p class="card-text">{{$user->descripcion}}</p>
                    </div>
                    <div class="card-footer">
                        @if(auth()->user()->isFollowing($user))
                        <form method="post" action="{{ route('unfollow', $user) }}">
                            @csrf
                            <button class="btn btn-sm btn-danger" type="submit">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                    </svg>
                                </i> Dejar de seguir
                            </button>
                        </form>
                        @else
                        <form method="post" action="{{ route('follow', $user) }}">
                            @csrf
                            <button class="btn btn-sm btn-success" type="submit">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                    </svg>
                                </i> Seguir
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

  <!--<div class="card w-auto">
    <div class="card w-auto">
      <h6 class="text-capitalize center">Sugerencia de amigos</h6>
      <p class="text-sm mb-0">
        <span class="font-weight-bold"></span> 
      </p>
    </div>
    <div class="card-body p-md-3 p-1" style="height: 400px; overflow-y: auto;">
      <div class="card-group">
         @foreach ($users as $user)
  <div class="col-md-6 mb-3">
    <div class="card">
      <img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top" alt="avatar"style="width: 70%; height: 70%; object-fit: cover;" />
      <div class="card-body">
        <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>
        <p class="card-text">{{$user->descripcion}}</p>
      </div>
      <div class="card-footer">
        @if(auth()->user()->isFollowing($user))
        <form method="post" action="{{ route('unfollow', $user) }}">
          @csrf
          <button class="btn btn-sm btn-danger" type="submit"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg></i> Dejar de seguir</button>
        </form>
        @else
        <form method="post" action="{{ route('follow', $user) }}">
          @csrf
          <button class="btn btn-sm btn-success" type="submit"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg></i> Seguir</button>
        </form>
        @endif
      </div>
    </div>
  </div>
  @endforeach
      </div>
    </div>
          </div>-->
           <div class="card w-auto ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Post</h6>
              </div>
            </div>
            <div class="card-responsive">
            <h5>Posts Relacionados</h5>
   
            <?php

// Verificar si la función getLinkContent() no está definida antes de declararla
if (!function_exists('getLinkContent')) {
    // Definir la función getLinkContent() solo si no está definida
    function getLinkContent($url) {
        $content = file_get_contents($url);
        if ($content !== false) {
            return $content;
        } else {
            return null;
        }
    }
}

// Verificar si la función extractLinkTitle() no está definida antes de declararla
if (!function_exists('extractLinkTitle')) {
    // Definir la función extractLinkTitle() solo si no está definida
    function extractLinkTitle($content) {
        preg_match('/<title>(.*?)<\/title>/s', $content, $matches);
        return !empty($matches[1]) ? $matches[1] : null;
    }
}

// Verificar si la función extractLinkDescription() no está definida antes de declararla
if (!function_exists('extractLinkDescription')) {
    // Definir la función extractLinkDescription() solo si no está definida
    function extractLinkDescription($content) {
        preg_match('/<meta name="description" content="(.*?)"/s', $content, $matches);
        return !empty($matches[1]) ? $matches[1] : null;
    }
}

// Verificar si la función extractLinkImage() no está definida antes de declararla
if (!function_exists('extractLinkImage')) {
    // Definir la función extractLinkImage() solo si no está definida
    function extractLinkImage($content) {
        preg_match('/<meta property="og:image" content="(.*?)"/s', $content, $matches);
        return !empty($matches[1]) ? $matches[1] : null;
    }
}

require '../vendor/autoload.php';  // Asegúrate de que esta línea esté presente

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;

use Symfony\Component\DomCrawler\Crawler;
function getLinkContent($url) {
    // Utiliza cURL o file_get_contents para obtener el contenido
    $content = @file_get_contents($url);
    return $content ?: null; // Devuelve null si no se puede obtener el contenido
}

// Función para extraer el título del contenido del enlace
function extractLinkTitle($linkContent) {
    if (preg_match('/<title>(.*?)<\/title>/', $linkContent, $matches)) {
        return $matches[1];
    }
    return null; // Devuelve null si no se encuentra el título
}

// Función para extraer la descripción del contenido del enlace
function extractLinkDescription($linkContent) {
    if (preg_match('/<meta name="description" content="(.*?)"/', $linkContent, $matches)) {
        return $matches[1];
    }
    return null; // Devuelve null si no se encuentra la descripción
}

// Función para extraer la imagen del contenido del enlace
function extractLinkImage($linkContent) {
    if (preg_match('/<meta property="og:image" content="(.*?)"/', $linkContent, $matches)) {
        return $matches[1];
    }
    return null; // Devuelve null si no se encuentra la imagen
}

?>

    @foreach($relatedPosts as $post)
        <div class="card">
        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        </div>
        <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{{$post->category->nameCategoria}}</span>
            <div class="card-body pt-2">
                <h7 class="card-title" style="font-family:monospace;">
             <!--Verificar si el contenido del post contiene enlaces -->
             <?php
                // Analizar el contenido del post
$postContent = $post->content;

$postContentWithLinks = preg_replace_callback('/\b(https?:\/\/\S+)\b/', function($matches) {
    $url = $matches[1];
    $linkContent = getLinkContent($url);

    if ($linkContent !== false) { // Comprueba si se pudo obtener el contenido del enlace
        $linkTitle = extractLinkTitle($linkContent);
        $linkDescription = extractLinkDescription($linkContent);
        $linkImage = extractLinkImage($linkContent);

        // Si no hay descripción, no mostrar nada
        if (!$linkDescription) {
            return 'null';
        }

        // Mostrar el enlace con su contenido
        $html = '<div class="url-info">';
        $html .= '<h4>' . htmlspecialchars($linkTitle) . '</h4>';
        $html .= '<p>' . htmlspecialchars($linkDescription) . '</p>';
        if ($linkImage) {
            $html .= '<div class="url-image"><img src="' . htmlspecialchars($linkImage) . '" class="img-fluid"></div>';
        }
        $html .= '</div>';
        $html .= '<a href="' . htmlspecialchars($url) . '" target="_blank">' . htmlspecialchars($url) . '</a>';
        return $html;
    } else {
        // Si no se puede obtener el contenido del enlace, mostrar solo el enlace
        return 'null';
    }
}, $postContent);

echo $postContentWithLinks;
                ?>
             </h7>
            </div>
            <!-- Resto del contenido del post -->
            <p class="card-description mb-4">
                <!-- imagen -->
                @if ($post->image)
                    <img src="{{ asset('uploads/posts/' . $post->image) }}" class="img-fluid" alt="Post Image">
                @endif
            </p>
            <div class="author align-items-center">
            <!-- <img src="{{ auth()->user()->fotos ? asset('uploads/avatars/'.Auth::user()->fotos) :  asset('uploads/avatars/avatar.jpg') }}"  class="avatar shadow" alt="sin imagen" /> -->

                <img src="{{ asset('uploads/avatars/'.$post->user->fotos) }}" alt="..." class="avatar shadow">
                <div class="name ps-3">
                @if ($post->owner->id === auth()->id())
            <a href="{{ route('perfil') }}" class="card-title"><span>{{ $post->owner->nombre }}</span></a>
            @else
            <a href="{{ route('perfilusuarios', $post->owner->id) }}" class="card-title"><small>{{ $post->owner->nombre }}</small></a>
            @endif
            <div class="stats">
                        <small>{{ $post->published_at->format('d/M/Y')}}</small>
                    
                    </div>
                </div>
            </div>
            <div class="name ps-3">
            {{ $post->likes()->sum('count') }} star
            </div>
            

<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="shareDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class='fas fa-share-alt'></i>
        Compartir
    </button>
    <ul class="dropdown-menu" aria-labelledby="shareDropdown">
        <li>
            <a class="dropdown-item" href="#" onclick="shareOnWhatsApp('{{ route('post.public', $post->id) }}')">
                <i class="fab fa-whatsapp"></i> 
                WhatsApp
            </a>
        </li>
        <li>
            <!--<a class="dropdown-item" href="#" onclick="copyLink('{{route('post.public', $post->id)}}',event)">-->
            <a class="dropdown-item" href="#" onclick="copyLink('{{route('postess', $post->id) }}', event)">
                <i class="fas fa-copy"></i>
                Copiar enlace
            </a>
        </li> 
    </ul>
</div>
         
           
          
        </div>
    </div>
@endforeach
                            
    

</div>
<div class="card-responsive">
            <h4>Posts de seguidores</h4>


@foreach ($posts as $poste)
    <div class="card">
        <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        </div>
        <div class="card-body pt-2">
            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">{{$poste->category->nameCategoria}}</span>
            <div class="card-body pt-2">
                <h7 class="card-title" style="font-family:monospace;">
            <!-- Verificar si el contenido del post contiene enlaces -->
             <?php
              $postContent = $poste->content;
              $postContentWithLinks = preg_replace_callback('/\b(https?:\/\/\S+)\b/', function($matches) {
        $url = $matches[1];
        $linkContent = getLinkContent($url);
        if ($linkContent !== null) {
            $linkTitle = extractLinkTitle($linkContent);
            $linkDescription = extractLinkDescription($linkContent);
            $linkImage = extractLinkImage($linkContent);

            // Si no hay descripción, no mostrar nada
            if (!$linkDescription) {
                return '';
            }

            // Mostrar el enlace con su contenido
            return '<div class="url-info"><h4>' . $linkTitle . '</h4><p>' . $linkDescription . '</p></div><div class="url-image"><img src="' . $linkImage . '" class="img-fluid" ></div><a href="' . $url . '" target="_blank">' . $url . '</a>';
        } else {
            // Si no se puede obtener el contenido del enlace, mostrar solo el enlace
            return '<a href="' . $url . '" target="_blank">' . $url . '</a>';
        }
    }, $postContent);

    echo $postContentWithLinks;
                ?>
             </h7>
            </div>
            <!-- Resto del contenido del post -->
            <p class="card-description mb-4">
                <!-- imagen -->
                @if ($poste->image)
                    <img src="{{ asset('uploads/posts/' . $poste->image) }}" class="img-fluid" alt="Post Image">
                @endif
            </p>
            <div class="author align-items-center">
            <!-- <img src="{{ auth()->user()->fotos ? asset('uploads/avatars/'.Auth::user()->fotos) :  asset('uploads/avatars/avatar.jpg') }}"  class="avatar shadow" alt="sin imagen" /> -->

                <img src="{{ asset('uploads/avatars/'.$poste->user->fotos) }}" alt="..." class="avatar shadow">
                <div class="name ps-3">
                @if ($poste->owner->id === auth()->id())
            <a href="{{ route('perfil') }}" class="card-title"><span>{{ $poste->owner->nombre }}</span></a>
            @else
            <a href="{{ route('perfilusuarios', $poste->owner->id) }}" class="card-title"><small>{{ $poste->owner->nombre }}</small></a>
            @endif
            <div class="stats">
                        <small>{{ $poste->published_at->format('d/M/Y')}}</small>
                    </div>
                    <!-- <span>{{$poste->owner->nombre}}</span>
                    <div class="stats">
                        <small>{{ $poste->published_at->format('d/M/Y')}}</small>
                    </div> -->
                </div>
            </div>
            <div class="name ps-3">
            {{ $poste->likes()->sum('count') }} star
            </div>
            <form action="{{ route('posts.like', $poste->id) }}" method="POST" id="formularios" >
    @csrf
    
    <!-- Range para seleccionar la cantidad de likes -->
    <label for="like-range">Selecciona hasta 5 star:</label>
    <!-- Obtener el conteo de likes del usuario autenticado específicamente para el post actual -->
    @php
        $userLikeCount = $poste->likes()->where('user_id', auth()->id())->sum('count');
        $remainingLikes = max(0, 5 - $userLikeCount);
    @endphp
    <input type="range" id="like-range" name="likesp" min="0" max="{{ $remainingLikes }}" value="0">
    <output for="like-range">{{ $userLikeCount }}</output> <!-- Mostrar el valor seleccionado -->

    <!-- Agregar un campo oculto para enviar el valor de $remainingLikes al controlador -->
    <input type="hidden" name="remainingLikes" value="{{ $remainingLikes }}">

    <!-- Verificar si el usuario ya ha dado sus 5 likes en este post -->
    @if ($userLikeCount >= 5)
        <!-- Si el usuario ya ha dado sus 5 likes, deshabilitar el botón -->
        <button type="button" class="btn btn-danger" disabled><i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg></i> Sin star</button>
    @else
        <!-- Si no, permitir al usuario dar like -->
        <button type="submit" data-post-id="{{ $poste->id }}" class="btn btn-success"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></i> Dar {{ $remainingLikes > 1 ? 'likes' : 'like' }}</button>
    @endif 
</form>

<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="shareDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
  <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5"/>
</svg></i>
        Compartir
    </button>
    <ul class="dropdown-menu" aria-labelledby="shareDropdown">
        <li>
            <a class="dropdown-item" href="#" onclick="shareOnWhatsApp('{{ route('post.public', $poste->id) }}')">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg></i> <!-- Icono de WhatsApp -->
                WhatsApp
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="#" onclick="copyLink('{{route('postess', $poste->id) }}', event)">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
</svg></i>
                Copiar enlace
            </a>
        </li> 
    </ul>
</div>
         
            <h6>Sala de Comentarios</h6>
            @include('posts.commentsDisplay', ['comments' => $poste->comments, 'post_id' => $poste->id])
            <hr />
            <h6>Agregar Comentario</h6>
            <form method="post" action="{{ route('comments.store') }}">
                @csrf
                <div class="input-group mb-3">
                <input type="hidden" name="post_id" value="{{ $poste->id }}" />
                  <input type="text"  name="body" class="form-control" placeholder="Agregar comentario" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-success" type="submit" id="button-addon2" value="Agrega"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
</svg></i>  Enviar</button>
                </div>
                
            </form>
        </div>
    </div>
@endforeach
                            
              
            </div>
          </div>
        </div>
        
        <!-- lista usuarios -->
        <div class="col-lg-5">
    <div class="card w-auto">
        <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Reels</h6>
        </div>
        <div class="card-body p-3">
         
            @foreach ($video as $videos)
           <meta property="og:description" content="Descripción del video">
    <meta property="og:image" content="{{$videos->descripcion}}">
    <meta property="og:url" content="{{ asset('rels/'.$videos->nombre) }}">
            <div class="card w-auto mb-3">
                <div class="card-body">
                    <h6 class="card-title">
                        <img src="{{ asset('uploads/avatars/'.$videos->user->fotos) }}" class="img-fluid avatar-lg">
                       @if ($videos->owner->id === auth()->id())
            <a href="{{ route('perfil') }}" class="card-title"><h8>{{ $videos->owner->nombre }}</h8></a>
            @else
            <a href="{{ route('perfilusuarios', $videos->owner->id) }}" class="card-title"><h8>{{ $videos->owner->nombre }}</h8></a>
            @endif
            <span>- {{ $videos->created_at->format('M d y') }}</span>
                    </h6>
                    <p class="card-text"><strong>{{ $videos->descripcion }}</strong> / {{ $videos->likes()->sum('count') }} star</p>
                    <div>
                        <video class="embed-responsive-item"width="80%" height="80%"  controls onended="redirectToLogin()">
                           <!-- MP4 -->
                            <source src="{{ asset('rels/'.$videos->nombre) }}" type="video/mp4" >
                            
                          </video>
                    </div>
                    <!-- Resto de tu código -->
                    <form action="{{ route('videos.like', $videos->id) }}" method="POST">
                              @csrf
                              <label for="like-range">Selecciona hasta 5 star:</label>
                              <input type="range" id="like-range" name="likes" min="0" max="{{ 5 - $videos->likes()->where('user_id', auth()->id())->sum('count') }}" value="0">
                              <output for="like-range">{{ 5 - $videos->likes()->where('user_id', auth()->id())->sum('count') }}</output>
                              <button type="submit" class="btn {{ $videos->likes()->where('user_id', auth()->id())->sum('count') >= 5 ? 'btn-danger' : 'btn-success' }}" {{ $videos->likes()->where('user_id', auth()->id())->sum('count') >= 5 ? 'disabled' : '' }}>
                                  @if ($videos->likes()->where('user_id', auth()->id())->sum('count') >= 5)
                                  <i ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
  <path d="M5.354 5.119 7.538.792A.52.52 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.54.54 0 0 1 16 6.32a.55.55 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.5.5 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.6.6 0 0 1 .085-.302.51.51 0 0 1 .37-.245zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.56.56 0 0 1 .162-.505l2.907-2.77-4.052-.576a.53.53 0 0 1-.393-.288L8.001 2.223 8 2.226z"/>
</svg></i>Sin star
                                  @else
                                 <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg></i> star
                                  @endif
                              </button>
                          </form>
                          
                          <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="shareDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
  <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5"/>
</svg></i>
        Compartir
    </button>
    
     
    <ul class="dropdown-menu" aria-labelledby="shareDropdown">
        <li><a class="dropdown-item" href="#" onclick="shareReelOnWhatsApp('{{ asset('rels/'.$videos->nombre) }} ')"target="publicreel"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg></i> >WhatsApp</a></li>
    

        </ul>
</div>
                          @foreach ($videos->comments as $comment)
                                          <h6 class="card-title"><img src="{{ asset('uploads/avatars/'.$comment->user->fotos) }}" class="img-fluid avatar-lg">
                                         @if ($comment->user->id === auth()->id())
                                        <a href="{{ route('perfil') }}" class="card-title"><strong>{{ $comment->user->nombre }}</strong></a>
                                        @else
                                            <a href="{{ route('perfilusuarios', $comment->user->id) }}" class="card-title"><strong>{{ $comment->user->nombre }}</strong></a>
                                        @endif
                                          <div class="alert alert-light" role="alert">
                                    {{$comment->comment}}
                                  </div></h6>
                          @endforeach
                          @if (session('comentario'))
                              <div class="alert alert-success">
                                  {{ session('comentario') }}
                              </div>
                          @endif
                          <form action="{{ route('video-comments.store') }}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                            <input type="hidden"  name="video_id" value="{{ $videos->id }}">
                              <input type="text" class="form-control"  name="comment" placeholder="Agregar comentario" aria-label="Text input with dropdown button">
                              <button class="btn btn-success" type="submit"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
  <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
</svg></i>   Enviar</button>
                            </div>
                            
                        </form>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<script>
  //compartir video en whatsapp
    function shareReelOnWhatsApp(videoUrl) {
        // Crear el mensaje con la URL del video
        var message = 'Mira este reel: ' + videoUrl;
        
        // Codificar el mensaje para que se pueda pasar como parámetro en la URL
        var encodedMessage = encodeURIComponent(message).replace(/%20/g, '+');
        
        // Verificar si el usuario está en un dispositivo móvil o en una computadora
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            // Si está en un dispositivo móvil, abrir la aplicación de WhatsApp
            window.open('whatsapp://send?text=' + encodedMessage);
        } else {
            // Si está en una computadora, abrir WhatsApp Web en una nueva ventana del navegador
            window.open('https://web.whatsapp.com/send?text=' + encodedMessage, '_blank');
        }
    }

    function redirectToLogin() {
        // Redirigir al usuario a la página de inicio de sesión después de compartir el video
        window.location.href = '/login';
    }
</script>
<script>
  //copiar link para post
function copyLink(link, event) {
    event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace

    // Guardar la posición actual de desplazamiento
    var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    // Copiar el enlace
    var tempInput = document.createElement("input");
    tempInput.value = link;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);

    // Restaurar la posición de desplazamiento
    window.scrollTo(0, scrollPosition);

    // Mostrar una notificación o mensaje de éxito
    alert("¡El enlace se ha copiado al portapapeles!");
}
  //compartir post por whatsapp
    function shareOnWhatsApp(postUrl) {
        var message = 'Mira este post: ' + postUrl;

        // Codificar el mensaje para que se pueda pasar como parámetro en la URL
        var encodedMessage = encodeURIComponent(message);

        // Verificar si el usuario está en un dispositivo móvil o en una computadora
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            // Si está en un dispositivo móvil, abrir la aplicación de WhatsApp
            window.open('whatsapp://send?text=' + encodedMessage);
        } else {
            // Si está en una computadora, abrir WhatsApp Web en una nueva ventana del navegador
            window.open('https://web.whatsapp.com/send?text=' + encodedMessage, '_blank');
        }
    }

  document.addEventListener("DOMContentLoaded", function() {
    var etiquetasContainer = document.getElementById("etiquetas");

    var selectCategoria = document.getElementById("categoria");

    // Manejar el cambio en la selección de categoría
    selectCategoria.addEventListener("change", function() {
        var categoriaSeleccionada = selectCategoria.value;

        // Realizar una solicitud AJAX para obtener las etiquetas relacionadas
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                // Limpiar el contenedor de etiquetas
                etiquetasContainer.innerHTML = "";
                // Llenar el contenedor de etiquetas con checkboxes
                data.forEach(function(etiqueta) {
                    var checkboxDiv = document.createElement("div");
                    checkboxDiv.classList.add("form-check", "form-check-inline");

                    var checkboxInput = document.createElement("input");
                    checkboxInput.classList.add("form-check-input");
                    checkboxInput.type = "checkbox";
                    checkboxInput.name = "tags[]";
                    checkboxInput.value = etiqueta.id;

                    var checkboxLabel = document.createElement("label");
                    checkboxLabel.classList.add("form-check-label");
                    checkboxLabel.textContent = etiqueta.name;

                    checkboxDiv.appendChild(checkboxInput);
                    checkboxDiv.appendChild(checkboxLabel);
                    etiquetasContainer.appendChild(checkboxDiv);
                });
            }
        };
        xhr.open("GET", "/obtener-etiquetas?categoria=" + categoriaSeleccionada, true);
        xhr.send();
    });

    // Al cargar la página, asegurarse de cargar las etiquetas para la categoría inicialmente seleccionada
    selectCategoria.dispatchEvent(new Event('change'));
});
</script>

@endsection
