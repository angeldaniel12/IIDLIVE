@extends('layouts.panel2')

@section('content')

<div class="container">
  <div class="row">
@foreach ($v as $video)
<div class="col-5">
<div class="card">
             
             
                    <!-- <video class="fm-video video-js" width="320" height="240" controls poster="{{ asset('img/illustrations/icon-documentation.svg')}}" preload="metadata"> -->
                    <div class="ratio ratio-16x9">
                        <video controls src="{{ asset('rels/'. $video->nombre)}}"></video>
                    </div>
                    <!-- <video id="my-video"  style="max-width: 100%; height: 100%"controls><source src="{{ asset('rels/'. $video->nombre)}}" type="video/mp4"> -->
                    <!-- <source  src="{{ Storage::url('/rels/'. $video->id)}}" type="video/webm">
                    <source  src="{{ Storage::url('/rels/'. $video->id)}}" type="video/ogg"> -->
                   
            
                    
                    <div><h6>{{$video->descripcion}} /{{ $video->likes()->sum('count') }} star
                       
                    </h6> </div>
                   
                    <form action="{{route('creador.archivo.borrar',$video->id)}}" method="POST">
                    @csrf  @method('DELETE') {{csrf_field()}}
                    <button type="submit" class="btn btn-danger" >Eliminar</button>
                    </form>
                  
              
      </div>
      </div>
@endforeach

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