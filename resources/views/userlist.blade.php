
@extends('layouts.panel2')

@section('content')

<div class="container">
          <div class="container">
            <h5>Lista de usuarios</h5>
          </div>
  <div class="row">
  
  @foreach ($users as $user)
  <div class="card" style="width: 18rem;">
  <img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top"  >
  <div class="card-body">
    <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>
    
    <p class="card-text">{{$user->descripcion}}</p>
    @if(auth()->user()->isNot($user))
    @if(auth()->user()->isFollowing($user))
        <form method="post" action="{{ route('unfollow', $user) }}">
            @csrf
            <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
        </form>
    @else
        <form method="post" action="{{ route('follow', $user) }}">
            @csrf
            <button class="btn btn-sm btn-success" type="submit">Seguir</button>
        </form>
    @endif
@endif
  </div>
</div>
      <!-- <div class="col-4">
              <div class="card">
               <div class="card-footer">
                <img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="avatar avatar-sm me-3">
                   
                    <a href="{{ route('perfilusuarios', $user->id) }}">{{ $user->nombre }} 
                    
                    <div class="card-footer">
                    @foreach ($fotos as $img)
                    <img  src="{{url($img->url)}}" width="200px" heigt="200px" >
                    @endforeach
                    </div>
              <div class="d-flex center-content-between">
              @if(auth()->user()->isNot($user))
    @if(auth()->user()->isFollowing($user))
        <form method="post" action="{{ route('unfollow', $user) }}">
            @csrf
            <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
        </form>
    @else
        <form method="post" action="{{ route('follow', $user) }}">
            @csrf
            <button class="btn btn-sm btn-success" type="submit">Seguir</button>
        </form>
    @endif
@endif
                
              </div>
             </div>
             </div>
             </div> 
              -->
      @endforeach
      </div>
      
     
</div>

@endsection
