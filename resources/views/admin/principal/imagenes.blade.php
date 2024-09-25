@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> <i>Id</i></th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Descripcion</th>
          <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> -->
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
      @foreach ($imag as $img)
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="{{ asset('uploads/avatars/'.$img->user->fotos) }}"  class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">{{$img->owner->nombre}}</h6>
                <p class="text-xs text-secondary mb-0"></p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">{{$img->id}}</p>
            <p class="text-xs text-secondary mb-0"></p>
          </td>
          <td class="align-middle text-center text-sm">
          <p class="text-xs font-weight-bold mb-0">{{$img->descripcion}}</p>
          </td>
          <!-- <td class="align-middle text-center">
          <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"> ver docuento
          </td> -->
          <td class="align-middle">
          <form action="{{route('admin.imagenes.borrar',$img)}}" method="POST">
          
                    @csrf
                    @method('DELETE')
                 
                      <button type="submit" class="btn btn-danger" >Eliminar</button>
                    </form>
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