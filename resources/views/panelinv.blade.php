@extends('layouts.welcomeinv')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido(a)') }} invitado(a)</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hola, como estas el dia de hoy?') }}
                </div>
                @auth
                <!--Vista inicial para los usuarios invitados-->
                @endauth
               
            </div>
        </div>
    </div>

    
    <div class="row">
@foreach ($rels as $videos)
<div class="col">
             
             
                    <video width="320" height="240" autoplay muted playsinline controls>
                    <source  src="{{ asset('rels/'. $videos->nombre)}}" type="video/mp4">
                    <source  src="{{ asset('/rels/'. $videos->nombre)}}" type="video/webm">
                    <source  src="{{ asset('/rels/'. $videos->nombre)}}" type="video/ogg">
                   error
                    </video> 
                    <h4>
                      <h4>
                      <div> <img src="{{ asset('uploads/avatars/'.$videos->user->fotos) }}" class="img-fluid avatar-lg"> {{ $videos->owner->nombreusuario}} / {{$videos->created_at->format('M d y')}}
                          <div> {{$videos->descripcion}}</div>
                    </div>
                    </h4>
                    </h4>
                    
              
      </div>
@endforeach

</div> 


</div>



@endsection