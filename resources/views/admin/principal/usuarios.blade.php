@extends('layouts.admin')

@section('content')

<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rol</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Seguidores</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Technology</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha creacion</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($user as $usuario )
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="{{ asset('uploads/avatars/'.$usuario->fotos) }}" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">{{$usuario->nombre}}</h6>
                <p class="text-xs text-secondary mb-0">{{$usuario->email}}</p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">{{$usuario->role}}</p>
            <p class="text-xs text-secondary mb-0">Organization</p>
          </td>
          
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0"></p>
          </td> 
          
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">Online</p>
          </td> 
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">{{$usuario->created_at}}</span>
          </td>
          <td class="align-middle">
           <!-- buscar la manera que no se muestre el boton de borrar al admin -->
   
    <form action="{{ route('admin.user.borrar', $usuario->id) }}" class="formulario-eliminar" method="POST" style="display: inline;">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-danger">Eliminar</button>
    </form>

            <!-- <form action="{{route('admin.user.desactivar',$usuario->id)}}" class="formulario-desactivar"
            method="POST" style="display : inline">{{csrf_field()}} {{method_field('DELETE')}}
          <button class="btn btn-sousses">desactivar</button>
        </form> -->
            
            
          
            <!-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a> -->
          </td>
        </tr>
        @endforeach
       

      </tbody>
    </table>
  </div>
</div>

@endsection