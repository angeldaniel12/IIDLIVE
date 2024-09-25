@extends('layouts.panel2')

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<link
      href="https://fonts.googleapis.com/css?family=Roboto:400,500"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>

@section('content')
<div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary ">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">EDITAR MI CUENTA</h3>
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
                <form method="POST" action="{{route('creador.user.update')}}" enctype="multipart/form-data">
                {{csrf_field()}} {{method_field('PUT')}}
                  <!-- Address -->
                  <h6 class="heading-small text-muted mb-4">Informacion de Contacto</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-address">Nombre de usuerio</label>
                          <input name="nombreusuario" type="text" class="form-control form-control-alternative" value="{{Auth::user()->nombreusuario}}">
                        </div>
                      </div>
                      <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label" readonly="readonly">Correo Electronico</label>
                      <input class="form-control" type="email" readonly="readonly" value="{{auth()->user()->email}}">
                    </div>
                  </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-address">Direccion</label>
                          <input name="direccion" type="text" class="form-control form-control-alternative" value="{{Auth::user()->direccion}}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-city">Pais</label>
                          <input type="text" name="pais" class="form-control form-control-alternative" value="{{Auth::user()->pais}}">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-country">Ciudad</label>
                          <input type="text" name="ciudad" class="form-control form-control-alternative" value="{{Auth::user()->ciudad}}">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-country">Codigo Postal</label>
                          <input type="number" name="codigopostal" class="form-control form-control-alternative" value="{{Auth::user()->codigopostal}}">
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-country">Avatar</label>
                          <input type="file" class="form-control" id="fotos" name="fotos"  accept="image/*">
                          <!-- <input type="file" name="fotos" accept="image/*" capture="camera" > -->
                        </div>
                      </div>
                  <hr class="my-4" />
                  <!-- Description -->
                  <h6 class="heading-small text-muted mb-4">Acerca de mi</h6>
                  <div class="pl-lg-4">
                    <div class="form-group">
                      <label>Acerca de mi</label>
                      <textarea style="overflow:auto;resize:none" rows="4" name="descripcion" class="form-control form-control-alternative">{{Auth::user()->descripcion}}</textarea>
                    </div>
                  </div>
                  <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
                  
                  <button type="submit" class="btn btn-sm btn-primary">GUARDAR</button>
                </div>
                </form>
            </div>
          </div>
        </div>
@endsection