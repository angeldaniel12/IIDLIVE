<!-- codigo para los rels -->
@extends('layouts.panel2')

@section('content')
<div class="container">

  <div class="row w-auto">
@if(count($video) > 0)
    @foreach ($video as $videos)
        <div class="col-5">
            <div class="card w-auto">
                <video id="my-video" style="max-width: 100%; height: 100%" controls>
                    <source src="{{ asset('rels/'. $videos->nombre)}}" type="video/mp4">
                </video> 
                
                <h6>
                    <div>
                        <img src="{{ asset('uploads/avatars/'.$videos->user->fotos) }}" class="img-fluid avatar-lg">
                        {{ $videos->owner->nombre}} / {{$videos->created_at->format('M d y')}}
                        <div>{{ $videos->descripcion }}</strong> / {{ $videos->likes()->sum('count') }} star</div>
                    </div>
                </h6>
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
<script>
    var reproductor=videojs('my-video',{
        fluid:ture
    })
</script>
@endsection