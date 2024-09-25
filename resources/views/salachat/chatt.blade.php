@extends('layouts.panel2')

@section('content')
<div class="container">
        <h1>Salas de Chat</h1>

        <ul class="chat-room-list">
        @if(count($rooms) > 0)
    <div class="list-group">
        @foreach($rooms as $room)
            <div class="list-group-item">
            <h4 class="list-group-item-heading">Creador:  {{ $room->creator}}</h4>
           
                <p >Nombre de la Sala: <a href="{{ route('chat_rooms.show', $room->salas) }}">{{ $room->salas }}</a></p>
                @if(Auth::check() && Auth::user()->nombre == $room->creator)
                    <form action="{{ route('chat_rooms.delete', $room->salas) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="alert alert-danger" type="submit">Eliminar Sala de Chat</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
@else
<div class="alert alert-light" role="alert">
No hay salas de chat activas.
</div>
   
@endif

        </ul>
    </div>
    <div class="container">
        <div class="list-group"> 
            <form method="post" action="{{ route('chat.create') }}">
    @csrf
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <button class="btn btn-success" type="submit">Crear sala de chat</button>
        </div>
        <input type="text" class="form-control"  name="name" placeholder="Nombre de sala" required autocomplete="name"aria-label="" aria-describedby="basic-addon1">
    </div>

    <!-- <input class="form-control " type="text" name="name" required autocomplete="name" placeholder="crea tu sala de chat">
    
    <button type="submit" class="btn btn-success">Crear Sala de Chatss</button> -->
</form></div>
   
    </div>

@endsection 