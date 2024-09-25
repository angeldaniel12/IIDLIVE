@extends('layouts.panel2')
<link rel="stylesheet" href="file/to/path/css/emojionearea.min.css">
<script type="text/javascript" src="file/to/path/js/emojionearea.min.js"></script>
<style>
    #chat-messages {
        width: 100%; /* Ajustar el ancho al 100% del contenedor padre */
        max-width: 800px; /* Establecer un ancho máximo para evitar que el contenedor sea demasiado ancho */
        margin: 0 auto; /* Centrar horizontalmente el contenedor */
    }
    #chat {
        width: 100%; /* Ajustar el ancho al 100% del contenedor padre */
        max-width: 800px; /* Establecer un ancho máximo para evitar que el contenedor sea demasiado ancho */
        margin: 0 auto; /* Centrar horizontalmente el contenedor */
    }

</style>
@section('content')
<div class="card">
  <div class="card-body">
  <h5>Sala: {{ $chatRoom }}</h5>

  <!-- @if($participantsCount > 0)
            <p>Número de participantes: {{ $participantsCount }}</p>
        @else
            <p>No hay participantes en esta sala de chat.</p>
        @endif -->
<div class="card-body">
    <p>¿Estás seguro de que quieres salir de esta sala de chat?</p>
    <form action="{{ route('chat_rooms.leave', $chatRoom) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Salir de la Sala de Chat</button>
    </form>
</div>

  </div>
</div>
<div id="chat-messages">
@foreach($messages as $message)
    <ul class="list-group">
        <li class="list-group-item d-flex align-items-center">
            <div class="row">
                <div class="col-auto">
                    <span class="badge bg-primary text-capitalize">{{ ucfirst(strtolower($message->user_name)) }}</span>
                </div>
                <div class="col">
                    {{ $message->message }}
                </div>
            </div>
        </li>
    </ul>
@endforeach
</div>

    <form id="chat-form" action="{{ route('chat.send', ['chatRoom' => $chatRoom]) }}" method="post">
        @csrf
        <div id="chat" class="input-group mb-3">
            <input type="text"  id="example1" class="form-control" name="message" placeholder="Tu mensaje" aria-label="Tu mensaje" aria-describedby="basic-addon2">
        
            <div class="input-group-append">
                <button id="submit-message" class="btn btn-outline-secondary" type="submit"><i class='fas fa-comment-dots'></i> Enviar</button>
            </div>
        </div>
        <!-- <input class="form-control" type="text" name="message" placeholder="Escribe tu mensaje">
        <button type="submit">Enviar</button> -->
    </form>

<script type="text/javascript">
  $(document).ready(function() {
    $("#example1").emojioneArea();
  });
</script> 
@endsection
@section('scripts')

<script>
    const chatForm = document.getElementById('chat-form');
    const chatMessages = document.getElementById('chat-messages');

    chatForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const messageInput = chatForm.querySelector('input[name="message"]');
        const message = messageInput.value.trim();

        if (message !== '') {
            // Enviar el mensaje usando AJAX
            axios.post(chatForm.getAttribute('action'), {
                message: message
            })
            .then(function(response) {
                // Manejar la respuesta si es necesario
                console.log(response);
            })
            .catch(function(error) {
                // Manejar errores si los hay
                console.error(error);
            });

            // Limpiar el campo de entrada después de enviar el mensaje
            messageInput.value = '';
        }
    });

    // Puedes agregar aquí el código para escuchar eventos de mensajes nuevos y actualizar la vista si es necesario
</script>
<script>
    document.getElementById('submit-message').addEventListener('click', function(e) {
        e.preventDefault();
        
        const messageInput = document.querySelector('#chat-form input[name="message"]');
        const message = messageInput.value.trim();

        if (message !== '') {
            // Enviar el mensaje usando Fetch API
            fetch(document.getElementById('chat-form').getAttribute('action'), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ message: message })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Manejar la respuesta si es necesario
                console.log(data);
            })
            .catch(error => {
                // Manejar errores si los hay
                console.error('There was a problem with the fetch operation:', error);
            });

            // Limpiar el campo de entrada después de enviar el mensaje
            messageInput.value = '';
        }
    });
</script>

@endsection
