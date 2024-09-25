@extends('layouts.panel2')

@section('content')
<div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary ">
            <div class="card-header border-0">
              <div class="row align-items-center">
                
                <div class="col-8">
                  <h3 class="mb-0">CONFIGURACION</h3>
                </div>
                
              </div>
            </div>
            </div>
            <div class="card">
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
                    <!-- Editar perfil -->
                    <!-- <div class="pl-lg-1">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <a href="#" class="dropdown-item">
                <i class="ni ni-settings"></i>
                <span>Editar perfil</span>
                      </a>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="col-md-6">
                  <div class="form-group">
                   <!-- contraseña -->
             <div class="col-lg-12">
                      <div class="form-group">
                      <a href="/Password" class="dropdown-item">
                <i class="ni ni-key-25"></i>
                <span>Cambio de contraseña</span>
              </a>
                      </div>
                    </div> 
                </div>
                <!-- <div class="col-md-6">
                  <div class="form-group">
                  <div class="col-lg-12">
                  <div class="fron-group">
                    <a href="/Bloqueo" class="dropdown-item">
                      <i class="ni ni-lock-circle-08"></i>
                      <span>Bloqueos</span>
                    </a>
                  </div>
                </div>
                  </div>
                </div> -->
                <div class="col-md-6">
                  <div class="form-group">
                    

                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Informacion de Contacto</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  <i class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Cumpleaños</i>
                      
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cumpleaños</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-time-alarm ni-3x"></i>
                    <h4 class="heading mt-4">Tu Fecha de cumpleaños: </h4>
                    <p>{{auth()->user()->fechanac}}</p>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <div class="col-lg-12">
                  <div class="fron-group">
                  <i class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registro">
  fecha registro
</i>
                    <!-- Modal -->
<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fecha de registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-sound-wave ni-3x"></i>
                    <h4 class="heading mt-4">Tu Fecha de registro es: </h4>
                    <p>{{auth()->user()->created_at}}</p>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

                  </div>
                </div>
                  </div>
                </div>
                <!-- <div class="col-md-4">
                  <div class="form-group">
                  <div class="col-lg-12">
                  <div class="fron-group">
                  <i class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registro">
  fecha registro
</i>
                    
<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fecha de registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-sound-wave ni-3x"></i>
                    <h4 class="heading mt-4">Tu Fecha de registro es: </h4>
                    <p>{{auth()->user()->created_at}}</p>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

                  </div>
                </div>
                  </div>
                </div> -->
                <!-- <div class="col-md-4">
                  <div class="form-group">
                   

                  </div>
                </div> -->
             
              <!-- <hr class="horizontal dark">
              <p class="text-uppercase text-sm"></p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                   
                  </div>
                </div>
              </div> -->
            </div>
          </div>

            <!-- <div class="card">
            <h6 class="heading-small text-muted mb-4">Preferencias</h6> -->
            <!-- contraseña -->
            <!-- <div class="col-lg-12">
                      <div class="form-group">
                      <a href="/Password" class="dropdown-item">
                <i class="ni ni-key-25"></i>
                <span>Cambio de contraseña</span>
              </a>
                      </div>
                    </div>  -->

                    <!-- Editar perfil -->
                    <!-- <div class="pl-lg-1">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <a href=" /" class="dropdown-item">
                <i class="ni ni-settings"></i>
                <span>Editar perfil</span>
              </a>
                      </div>
                    </div> -->

                      <!-- cumpleaños -->
<!--                       
                    <i data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cumpleaños
</i>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-time-alarm ni-3x"></i>
                    <h4 class="heading mt-4">Tu Fecha de cumpleaños: </h4>
                    <p>{{auth()->user()->fechanac}}</p>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div> -->
<!-- fecha de registro -->
<!-- <i data-bs-toggle="modal" data-bs-target="#registroModal">
Fecha registro
</i>
<div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="py-3 text-center">
                    <i class="ni ni-sound-wave ni-3x"></i>
                    <h4 class="heading mt-4">Tu Fecha de registro es: </h4>
                    <p>{{auth()->user()->created_at}}</p>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div> -->

            </div>
          </div>
</div>

            
            <!-- <div class="card"> -->
                <!-- Address -->
                <!-- <h6 class="heading-small text-muted mb-4">Preferencias</h6> -->
                
                  <!-- contenido multimedia -->
                  <!-- <div class  ="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                      <a href=" " class="dropdown-item">
                <i class="ni ni-collection"></i>
                <span>Contenido Multimedia</span>
              </a>                      
                    </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                      <a  class="dropdown-item" href="">
                <i class="ni ni-time-alarm"></i>
                <span   data-toggle="modal" data-target="#exampleModal">Tiempo en linea</span>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-success modal-dialog-centered modal-" role="document">
        <div class="modal-content ">
        	
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Atento aviso</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-sound-wave ni-3x"></i>
                    <h4 class="heading mt-4">Tu Fecha de registro es: </h4>
                    <p>{{auth()->user()->created_at}}</p>
                </div>
                
            </div>
             -->
            <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-white">Ok, Got it</button> -->
                <!-- <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Cerrar</button>
            </div>
            
        </div>
    </div>
    </div> -->
                <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form action="" method="POST" class="formulario-nuevo" >
                {{csrf_field()}}  
<div class="modal-dialog" role="document">
  
 
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <div class="form-group" >
                        <label class="form-control-label" for="input-username">Fecha de Registro</label>
                        <label type="text" name='title' class="form-control form-control-alternative"> {{auth()->user()->created_at}}</label>
                        
                      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    
      </div>
    </div>
  </div>
  </form>
</div> -->
              <!-- </a>       
                            
            </div>
           </div>
           <div class="col-lg-12">
                  <div class="fron-group">
                    <a href="" class="dropdown-item">
                      <i class="ni ni-lock-circle-open"></i>
                      <span>Estado de la cuenta</span>
                    </a>
                  </div>
                </div>
          </div>
        </div>
               
                
                <hr class="my-4" /> -->
                <!-- Description -->
                <!-- <h6 class="heading-small text-muted mb-4">Mi Configuración</h6>
                <div class="pl-lg-1">
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <a href=" /" class="dropdown-item">
                <i class="ni ni-settings"></i>
                <span>Editar perfil</span>
              </a>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                      <a href="/Password" class="dropdown-item">
                <i class="ni ni-key-25"></i>
                <span>Cambio de contraseña</span>
              </a>
                      </div>
                    </div> -->
                    <!-- cumpleaños-->
                    
                    <!-- <div class="col-lg-12">
                      <div class="form-group">
                      <a class="dropdown-item" href="">
                      <i class="ni ni-calendar-grid-58"></i>
                      <span   data-toggle="modal" data-target="#cumpleaños">Cumpleaños</span>
                      <div class="modal fade" id="cumpleaños" tabindex="-1" role="dialog" aria-labelledby="cumpleaños" aria-hidden="true">
    <div class="modal-dialog modal-default modal-dialog-centered modal-" role="document">
        <div class="modal-content ">
        	
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Atento aviso</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-time-alarm ni-3x"></i>
                    <h4 class="heading mt-4">Tu Fecha de cumpleaños: </h4>
                    <p>{{auth()->user()->fechanac}}</p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-white">Ok, Got it</button> 
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Cerrar</button>
            </div>
            
        </div>
    </div>
    </div> -->
                        <!-- <div class="modal fade" id="cumpleaños" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <form action="" method="POST" class="formulario-nuevo" >
                          {{csrf_field()}}  
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
       
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                              </div>
      
                              <div class="modal-body">
                              <div class="form-group" >
                              <label class="form-control-label" for="input-username">Fecha Cumpleaños</label>
                                 <label type="text" name='title' class="form-control form-control-alternative"> {{auth()->user()->fechanac}}</label>
                        
                                    </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    
                              </div>
                            </div>
                           </div>
                        </form>
                            </div> -->
        
                                <!-- </a>
                      </div>
                    </div> -->
                    <!-- 3  -->
                <!-- <div class="col-lg-12">
                  <div class="fron-group">
                    <a href="/Bloqueo" class="dropdown-item">
                      <i class="ni ni-lock-circle-open"></i>
                      <span>Bloqueos</span>
                    </a>
                  </div>
                </div> -->

                <!-- </div> -->
            
@endsection