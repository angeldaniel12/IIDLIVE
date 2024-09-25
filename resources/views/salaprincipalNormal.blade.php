<!--vista para las subsalas -->
@extends('layouts.transmisiones')

@section('content')
<div class="card-body">
                      <h5 class="card-title">Salas de Streaming</h5>
                      @can('/')
                        <a href="">hola</a>
                      @endcan
                      <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modalLong"> Como funcion el striming</button>
                     
                        <div class="modal fade" id="modalLong" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalLongTitle">Aviso Importante</h5>
                              <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                              ></button>
                            </div>
                            <div class="modal-body">
                              <p>
                                En esta página encontrarás salas de transmisión en vivo de diferentes usuarios en las cuales compartirán
                                contenidos relacionados con un tema de la categoria que se encuentra.
                              </p>
                              <p>
                                Solo es usuario espectador, podrá visualizar los lives que transmitan los creadores de las sala.
                              </p>
                              <p>
                                Por el monento solo podrás vusualizar el streaming debido a que esta actualizacion no cuenta con un chat en vivo.
                              </p>
                             
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Cerrar
                              </button>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>  

                
                     
                      
                    </div>  
<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
   
    <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/cult1.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 1</h5>
                      <p class="card-text">
                      Primera Sala de Transmision de Contenido Cultural
                      </p>
                      <a href="{{route ('vistas.viewercult')}}" class="btn btn-outline-primary">Ir a la sala</a>
                    </div>
                  </div>
                </div>
              
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/cult2.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 2</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text"> Segunda Sala de Transmision de Contenido Cultural</p>
                      <a href="{{route ('vistas.vieweracad')}}" class="btn btn-outline-success">ir a sala</a>
                    </div>
                  </div>
                </div>
              </div>
<!-- 
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/cult4.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 3</h5>
                      <p class="card-text">
                      Tercera Sala de Transmision de Contenido Cultural
                      </p>
                      <a href="{{route ('vistas.viewersocial')}}" class="btn btn-outline-warning">Ir a sala</a>
                    </div>
                  </div>
                </div>
              

                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/cult5.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 4</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text">Cuarta Sala de Transmision de Contenido Cultural</p>
                      <a href="{{route ('vistas.viewertec')}}" class="btn btn-outline-dark">Ir a sala</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/cult6.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Sala 5</h5>
                      <p class="card-text">
                      Quinta Sala de Transmision de Contenido Cultural
                      </p>
                      <a href="{{route ('vistas.viewerpoliti')}}" class="btn btn-outline-warning">Ir a sala</a>
                    </div>
                  </div>
                </div>

</div> -->
                
</div>
<!-- <div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <h1>Vista 1</h1>

   
                    <div class="card-body">
                      <h5 class="card-title">Cultural</h5>
                      <p class="card-text">
                      Sala de contenido cultural.
                      </p>
                      <a href="{{route ('views')}}" class="btn btn-outline-primary">Entrar a sala</a>
                    </div> 
                  </div>
                </div>
              
                

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <h1>Vista 3</h1>

<div class="row">
    <video style="width: 100%" id="video" src="" autoplay muted controls></video>
</div>                    <div class="card-body">
                      <h5 class="card-title">Social</h5>
                      <p class="card-text">
                      Sala de con tenido Social. </p>
                      <a href="#" class="btn btn-outline-warning">Entrar a sala</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/tecnologicos.jpeg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Tecnologico</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text">Sala de contenido tecnologico.</p>
                      <a href="#" class="btn btn-outline-dark">Entrar a sala</a>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/onu.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Politico</h5>
                      <p class="card-text">
                      Sala de contenido politico. </p>
                      <a href="#∫" class="btn btn-outline-warning">Entrar a sala</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/f1.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Deportes</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text">Sala de contenido  de deportes.</p>
                      <a href="#" class="btn btn-outline-dark">Entrar a sala</a>
                    </div>
                  </div>
                </div>
              </div>
              

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/cine.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Cine</h5>
                      <p class="card-text">
                      Sala de contenido sobre  cine. </p>
                      <a href="#" class="btn btn-outline-warning">Entrar a sala</a>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/imglives/turismo .jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Lugares</h5>
                      <h6 class="card-subtitle text-muted"></h6>
                      <p class="card-text">Sala de contenido sobre lugares.</p>
                      <a href="#" class="btn btn-outline-dark">Entrar a sala</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3">
                  <div class="card h-100">
                    <img class="card-img-top" src="../assets/img/imglives/sociedad1.jpg" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title">Viajes</h5>
                      <p class="card-text">
                      Sala de contenido de viajes. </p>
                      <a href="#" class="btn btn-outline-warning">Entrar a sala</a>
                    </div>
                  </div>
                </div>

              </div>  -->
                
</div>
@endsection