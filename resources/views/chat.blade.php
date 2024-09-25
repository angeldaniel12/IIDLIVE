<!-- @extends('layouts.panel2')

@section('content')
<div class="container">
        <h1>Salas de Chat</h1>

        <ul class="chat-room-list">
        @foreach($chatRooms as $chatRoom)
    <div class="chat-room">
        <h3>{{ $chatRoom['name'] }}</h3>
        <p>Creado por: {{ $chatRoom['creator_name'] }}</p>
        
    </div>
@endforeach
        </ul>
    </div>
<form method="post" action="{{ route('chat.create') }}">
    @csrf
    <input class="form-control " type="text" name="name" placeholder="crea tu sala de chat">
    <button type="submit" class="btn btn-success">Crear Sala de Chatss</button>
</form>
@endsection -->

 <!-- <p>Nombre de la Sala: {{ $room->salas }}</p>
     <li><a href="{{ route('chat_rooms.show', ['roomName' => $room]) }}">{{ $room }}</a></li>

        <form action="{{ route('chat_rooms.delete',  $room->salas) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar Sala de Chat</button>
        </form> -->

        @if(count($rooms) > 0)
    <div class="list-group">
        @foreach($rooms as $room)
            <div class="list-group-item">
                <p class="list-group-item-text">Nombre de la Sala: {{ $room->salas }}</p>
                <form action="{{ route('chat_rooms.delete', $room->salas) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar Sala de Chat</button>
                </form>
            </div>
        @endforeach
    </div>
@else
    <p>No hay salas de chat activas.</p>
@endif


        <a href="{{ route('chat_rooms.show', $room->salas) }}" class="list-group-item">
                    <h4 class="list-group-item-heading">Creador: {{ $room->creador }}</h4>
                    <p class="list-group-item-text">Nombre de la Sala: {{ $room->sala }}</p>
                </a>

}




//  Redis::del('active_chat_rooms'); 
                //  Redis::del('active_chat_rooms'); 

// //     // Obtener el nombre de usuario del usuario autenticado
//  $userName = auth()->user()->nombre;

// //  // Concatenar el nombre de usuario con el nombre de la sala de chat
//   $chatRoomNameWithUser = $userName . '_' . $chatRoom;

// //  // Eliminar los mensajes asociados a la sala de chat de Redis
//   Redis::del("chat:{$chatRoomNameWithUser}");
// //  // Obtener el contador actual de participantes en Redis
//   $currentParticipantsCount = Redis::hget("chat_room_users_count", $chatRoom);

// //  // Verificar si el contador actual es mayor que cero antes de decrementarlo
//   if ($currentParticipantsCount > 0) {
// //      // Decrementar el contador de participantes en Redis
//       Redis::hincrby("chat_room_users_count", $chatRoom, -1);
//   }
// // // Eliminar la sala de chat activa de Redis
//  Redis::srem('active_chat_rooms', $chatRoomNameWithUser);

// // Redirigir de vuelta a la página de salas de chat
// return redirect()->route('chat.index');
<script>
        document.getElementById('formularios').addEventListener('submit', function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe de forma predeterminada

            // Realizar cualquier lógica adicional que necesites, como enviar datos mediante AJAX

            // Ejemplo de enviar datos mediante AJAX (requiere jQuery)
            
            $.ajax({
              type: 'POST',
                url: '{{ route('posts.like',$poste->id) }}', // Ruta de tu controlador para dar like
                data: {
                    _token: '{{ csrf_token() }}',
                    postId: '{{ $poste->id }}', // ID del post al que se le dará like
                    likesp: 1 // Número de likes que deseas agregar
                },
                success: function(response) {
                    // Manejar la respuesta del servidor si es necesario
                    console.log('Like guardado exitosamente');
                },
                error: function(xhr, status, error) {
                    // Manejar errores si es necesario
                }
            });
            
        });
    </script>