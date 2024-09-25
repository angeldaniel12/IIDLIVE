<!-- Vista para las Salas de Streaming (espectadores)-->
@extends('layouts.liveviewers')
@section('content')
<div class="card-body">
                      <h5 class="card-title">Salas de Streaming Academico</h5>
                      <h6 class="card-subtitle text-muted">General</h6>
                    </div>  
<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Examples -->
    <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/academ1.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 1</h5>
                      <p class="card-text">
                      Primera Sala de Transmision de Contenido Academico
                      </p>
                      <a href="{{route ('vistas.viewerdeport')}}" class="btn btn-outline-primary">Ir a la sala</a>
                    </div>
                  </div>
                </div>
              
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/academ2.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 2</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text">Segunda Sala de Transmision de Contenido Academico.</p>
                      <a href="{{route ('vistas.viewercine')}}" class="btn btn-outline-success">ir a sala</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/academ3.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 3</h5>
                      <p class="card-text">
                      Tercera Sala de Transmision de Contenido Academico
                      </p>
                      <a href="{{route ('vistas.viewerlugar')}}" class="btn btn-outline-warning">Ir a sala</a>
                    </div>
                  </div>
                </div>
              

                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/academ4.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 4</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text">Cuarta Sala de Transmision de Contenido Academico</p>
                      <a href="{{route ('vistas.viewerviaje')}}" class="btn btn-outline-dark">Ir a sala</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/academ6.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 5</h5>
                      <p class="card-text">
                      Quinta Sala de Transmision de Contenido Academico
                      </p>
                      <a href="{{route ('vistas.viewerpoliti')}}" class="btn btn-outline-warning">Ir a sala</a>
                    </div>
                  </div>
                </div>

</div>
                
</div>
                
@endsection