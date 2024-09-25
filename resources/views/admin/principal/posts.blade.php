@extends('layouts.admin')
<!-- vista de todos los posts para el administrador-->
@section('content')

<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Titulo</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Introduccion</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoria</th>
          <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Etiquetas</th> -->
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($poste as $post)
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="{{ asset('uploads/avatars/'.$post->user->fotos) }}"  class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">{{$post->owner->nombre}}</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">{{ $post->title}}</p>
          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">{{ $post->excerpt}} </p>
          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">{{ $post->category->nameCategoria}} </p>
          </td>
         
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">{{ $post->published_at}}</span>
          </td>
          <td class="align-middle">
          <form action="{{route('admin.posts.destroy', $post)}}" class="formulario-eliminar" 
                                      method="POST" style="display : inline">
                                             {{csrf_field()}} {{method_field('DELETE')}}
                                <button  class="btn btn-danger" >Eliminar</button>

                                </form>
          
          </td>
        </tr>
        @endforeach
       

      </tbody>
    </table>
  </div>
</div>

<!-- <div class="card bg-default shadow">  
                <div class="card-header bg-transparent border-0">
                <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="posts-table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">USUARIO</th>
                    <th scope="col" >TITULO</th>
                    <th scope="col">INTRODUCCION</th>
                    <th scope="col">FECHA CREACION</th>
                    <th scope="col">ACCIONES</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($poste as $post)
                        <tr>
                            <td></td>
                            <td> <span class="mb-0 text-sm text-white">
                            {{ $post->title}}
                           </span></td>
                            <td><span class="mb-0 text-sm text-white">{{ $post->excerpt}}  </span></td>
                            
                            <td><span class="mb-0 text-sm text-white">{{ $post->published_at}} </span></td>

                            <td>
                              <form action="{{route('creador.posts.edit',$post)}}">
                              <button  class="btn btn-info">Editar</button>

                              </form>
                              <form action="{{route('postes',$post)}}">
                              <button  class="btn btn-info">Ver</button>

                              </form>
                                
                                <form action="{{route('creador.posts.destroy', $post)}}" class="formulario-eliminar" 
                                      method="POST" style="display : inline">
                                             {{csrf_field()}} {{method_field('DELETE')}}
                                <button  class="btn btn-danger" >Eliminar</button>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              </div>
            </div>
            </div> -->
@endsection