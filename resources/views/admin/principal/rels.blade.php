@extends('layouts.admin')

@section('content')

<div class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usuario</th>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Video</th>
          <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Technology</th> -->
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha</th>
          <th class="text-secondary opacity-7"></th>
          <th class="text-secondary opacity-7">Borrar</th>
        </tr>
      </thead>
      <tbody>
    @foreach ($video as $videoss )
    
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div>
                <img src="{{ asset('uploads/avatars/'.$videoss->user->fotos) }}" class="avatar avatar-sm me-3">
              </div>
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-xs">{{$videoss->owner->nombre}}</h6>
                <p class="text-xs text-secondary mb-0"></p>
              </div>
            </div>
          </td>
          <td>
            <p class="text-xs font-weight-bold mb-0">{{$videoss->nombre}}</p>
            <p class="text-xs text-secondary mb-0"></p>
          </td>
          
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">{{$videoss->created_at}}</span>
          </td>
          <td class="align-middle">
            <video width="320" height="240" autoplay muted playsinline controls>
                <source src="{{ asset('rels/'. $videoss->nombre)}}" type="video/mp4">
            </video>
            <!-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"> -->
            </a>
          </td>
          <td class="align-middle">
            <form action="{{route('admin.videos.borrar', $videoss->id)}}" class="d-inline formulario-eliminar" method="POST">
                  {{csrf_field()}} {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger" >Eliminar</button>
            </form>
          </td>
<!-- ' -->
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
@endsection