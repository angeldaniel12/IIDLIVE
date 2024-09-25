@extends('layouts.panel2')

@section('content')

<div class="container">
<div class="col-7">
    
    <div class="d-grid gap-2 d-md-block">
  <a href="{{route('creador.publicacion.reels')}}"  class="btn btn-light" type="button">Mis reels</a>
  <a href="{{route('creador.publicacion.posts')}}" class="btn btn-light" type="button">Mis post</a>
  <!-- <a href="{{route('seguidores')}}" class="btn btn-outline-primary" type="button">Seguidores</a>
                <a href="{{route('seguido')}}" class="btn btn-outline-secindary" type="button">Seguido</a> -->

    </div>
</div>
  <div class="row">
  @if(count($vid) > 0)
    @foreach ($vid as $video)
        <div class="col-5">
            <div class="card w-auto">
                <!-- <video class="fm-video video-js" width="320" height="240" controls poster="{{ asset('img/illustrations/icon-documentation.svg')}}" preload="metadata"> -->
                <div class="ratio ratio-16x9">
                    <video controls src="{{ asset('rels/'. $video->nombre)}}"></video>
                </div>
                <!-- <video id="my-video"  style="max-width: 100%; height: 100%"controls><source src="{{ asset('rels/'. $video->nombre)}}" type="video/mp4"> -->
                <!-- <source  src="{{ Storage::url('/rels/'. $video->id)}}" type="video/webm">
                <source  src="{{ Storage::url('/rels/'. $video->id)}}" type="video/ogg"> -->
            
                <div><h6>{{$video->descripcion}} /{{ $video->likes()->sum('count') }} star</h6></div>
                
                <form action="{{ route('creador.archivo.borrar', $video->id) }}" method="POST">
                    @csrf  @method('DELETE') {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
@else
    <div class="col-12">
        <div class="alert alert-info" role="alert">
            No hay reels disponibles.
        </div>
    </div>
@endif
</div>
     <div class="col-1">
     
    </div>
</div>
<script>
    var reproductor=videojs('my-video',{
        fluid:ture
    })
</script>

@endsection