@extends('layouts.app')

@section('content')
<h1>Chat en {{ $roomName }}</h1>

<div id="chat-messages">
    @foreach($messages as $message)
        <div>
            <strong>{{ $message['user_name'] }}:</strong> {{ $message['message'] }}
        </div>
    @endforeach
</div>

<form id="chat-form">
    <input type="text" name="message" placeholder="Escribe tu mensaje">
    <button type="submit">Enviar</button>
</form>
@endsection