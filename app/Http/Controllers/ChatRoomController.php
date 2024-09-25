<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;


class ChatRoomController extends Controller
{
    public function create(Request $request)
    {
       // Obtener el nombre de usuario del usuario autenticado
       $userName = auth()->user()->nombre;

    // Obtener el nombre de la sala de chat del formulario
    $chatRoomName = $request->input('name');

    // Concatenar el nombre de usuario con el nombre de la sala de chat
    $chatRoomNameWithUser = $userName . '_' . $chatRoomName;

    // Agregar la sala de chat activa a Redis
    Redis::sadd('active_chat_rooms', $chatRoomNameWithUser);
        
        return redirect()->route('chat.index');
    }
    public function ind()
    {
    $titulo="Sala de chat";
    // Obtener las salas de chat activas desde Redis
    $chatRooms = Redis::smembers('active_chat_rooms');
    $rooms=[];
    foreach ($chatRooms as $roomName) {
        // Obtener el creador de la sala
        $parts = explode('_', $roomName);
        $creator = count($parts) >= 2 ? $parts[0] : "Nombre de usuario no disponible";

        // Obtener el nombre de la sala de chat
        $roomChatName = count($parts) >= 2 ? $parts[1] : $parts[0]; // Considerando que el nombre de usuario también puede ser el nombre de la sala
        
        // Obtener el contador de usuarios para esta sala de chat desde Redis
        $participantsCount = Redis::scard("chat_room_users:{$roomChatName}");

        // Crear un objeto para la sala de chat
        $room = new \stdClass();
        $room->creator = $creator;
        $room->salas = $roomChatName;
        $room->participants_count = $participantsCount;
            
        // Agregar la sala de chat al array
        $rooms[] = $room;
    }          
        return view('salachat.chatt', compact('rooms'),['title'=>$titulo]);
    }
    
    public function show($chatRoom)
    {
        $titulo="Chat";
       
        // Obtenemos el usuario actualmente autenticado
    $user = Auth::user();
    $userName = $user->nombreusuario;

    // Verificar si el usuario ya está presente en la sala de chat
    $userInRoom = session()->has('user_in_room') && session('user_in_room') == $chatRoom;

    // Obtener el valor actual del contador de usuarios para esta sala de chat en Redis
    $participantsCount = Redis::hget("chat_room_users_count", $chatRoom) ?: 0;

    // Si el usuario está presente en la sala, no incrementamos el contador
    if (!$userInRoom) {
        // Si el usuario no está presente, incrementamos el contador y marcamos al usuario como presente en la sala
        Redis::hincrby("chat_room_users_count", $chatRoom, 1);
        session(['user_in_room' => $chatRoom]);
    }

    // Verificar si el contador actual es negativo
    if ($participantsCount < 0) {
        // Si el contador es negativo, establecerlo en cero
        Redis::hset("chat_room_users_count", $chatRoom, 0);
    }

    // Obtener los mensajes de la sala de chat
    $messages = Redis::lrange("chat:{$chatRoom}", 0, -1);
    $messages = array_map('json_decode', $messages);

        return view('salachat.show', compact('chatRoom', 'messages', 'userName','participantsCount'),["title"=>$titulo]);
    }

    public function send(Request $request, $chatRoom)
    {
        $request->validate([
            'message' => 'required|string|max:255',
        ]);
        $userName = auth()->user()->nombreusuario; // Obtener el nombre del usuario
        $message = $request->input('message');
        // agregamos el formato de fecha para los mensajes 
        /*
        $formatMessage
         */
        $timestamp = now()->timestamp;
    
        $data = [
            'user_name' => $userName, // Guardar el nombre de usuario junto con el mensaje
            'message' => $message,
            'timestamp' => $timestamp,
        ];
    

        // Guardar el mensaje en Redis
        Redis::rpush("chat:{$chatRoom}", json_encode($data));

        // Emitir evento de mensaje a través de Laravel Echo si es necesario

        // Obtener los mensajes actualizados después de enviar uno nuevo
        $messages = Redis::lrange("chat:{$chatRoom}", 0, -1);
        $messages = array_map('json_decode', $messages);
        
        // Mostrar la misma vista con los mensajes actualizados
        return redirect()->back();
    }

    public function deleteChatRoom($chatRoom)
    {
    
     // Obtener el nombre de usuario del usuario autenticado
     $userName = auth()->user()->nombre;

      // Concatenar el nombre de usuario con el nombre de la sala de chat
      $chatRoomNameWithUser = $userName . '_' . $chatRoom;

      // Eliminar los mensajes asociados a la sala de chat de Redis
      Redis::del("chat:{$chatRoomNameWithUser}");
      // Obtener el contador actual de participantes en Redis
      $currentParticipantsCount = Redis::hget("chat_room_users_count", $chatRoom);
        // reinicia el contador de participantes en 0
        Redis::hset("chat_room_users_count",$chatRoom, 0);

      // Verificar si el contador actual es mayor que cero antes de decrementarlo
    //   if ($currentParticipantsCount > 0) {
    //       // Decrementar el contador de participantes en Redis
    //       Redis::hincrby("chat_room_users_count", $chatRoom, -1);
    //   }
     // Eliminar la sala de chat activa de Redis
     Redis::srem('active_chat_rooms', $chatRoomNameWithUser);

    // Redirigir de vuelta a la página de salas de chat
    return redirect()->route('chat.index');
    }
    public function leave($chatRoom)
{
    // Obtener el nombre de usuario del usuario autenticado
    $userName = auth()->user()->nombre;

    // Decrementar el contador de participantes en Redis
    Redis::hincrby("chat_room_users_count", $chatRoom, -1);

    // Eliminar al usuario de la sala de chat
    Redis::hdel("chat_room_users", $chatRoom, $userName);

    return redirect()->route('chat.index')->with('success', 'Has salido de la sala de chat correctamente.');
}

public function getParticipantsCount(Request $request, $chatRoom)
{
    $participantsCount = Redis::hget("chat_room_users_count", $chatRoom) ?: 0;
    return response()->json(['participants_count' => $participantsCount]);
}
}
    // public function ind()
    // {
    //     // Obtener el nombre del usuario autenticado
    //     $currentUser = auth()->user()->nombre;
    
    //     $chatRooms = [];
    
    //     // Obtener las salas de chat activas desde Redis
    //     $rooms = Redis::smembers('active_chat_rooms');
    
    //     // Iterar sobre las salas de chat
    //     foreach ($rooms as $room) {
    //         // Obtener los datos del creador de la sala de chat desde Redis
    //         $userData = Redis::hgetall("chat_room:$room:creator");
    
    //         // Verificar si se encontraron datos del creador y si el nombre del creador es diferente al nombre del usuario autenticado
    //         if ($userData && isset($userData['nombre']) && $userData['nombre'] !== $currentUser) {
    //             // Agregar los detalles de la sala de chat a la lista, incluyendo el nombre del creador
    //             $chatRooms[] = [
    //                 'name' => $room,
    //                 'creator_name' => $userData['nombre']
    //             ];
    //         } else {
    //             // Si no se encontraron datos del creador o el nombre del creador es igual al nombre del usuario autenticado, mostrar "Usuario desconocido"
    //             $chatRooms[] = [
    //                 'name' => $room,
    //                 'creator_name' => 'Usuario desconocido'
    //             ];
    //         }
    //     }
    
    //     // Pasar los datos de las salas de chat a la vista
    //     return view('chat', compact('chatRooms'));
    // }
    
    

//     public function ind()
// {
//     $chatRooms = [];

//     $rooms = Redis::smembers('active_chat_rooms');
//     foreach ($rooms as $room) {
//         $userData = Redis::hgetall("chat_room:$room:creator");
        
//         // Verificar si se encontraron datos del usuario creador
//         if ($userData) {
//             $chatRooms[] = [
//                 'name' => $room,
//                 'creator_name' => isset($userData['nombre']) ? $userData['nombre'] : 'Usuario desconocido',
//                 'creator_id' => isset($userData['id']) ? $userData['id'] : null
//             ];
//         } else {
//             // Si no se encontraron datos del usuario creador, establecer valores predeterminados
//             $chatRooms[] = [
//                 'name' => $room,
//                 'creator_name' => 'Usuario desconocido',
//                 'creator_id' => null
//             ];
//         }
//     }

//     return view('chat', compact('chatRooms'));
// }
    // public function create(Request $request)
    // {
        
    //     $chatRoomName = $request->input('name');
    //     $userId = Auth::id(); // Obtener el ID del usuario actual

    //     // Guardar la información de la sala de chat y el usuario que la creó en Redis
    //     Redis::hmset("chat_room:$chatRoomName", [
    //         'name' => $chatRoomName,
    //         'created_by' => $userId
    //     ]);

    //     // Agregar la sala de chat a la lista de salas activas en Redis
    //     Redis::sadd('active_chat_rooms', $chatRoomName);

    //     return redirect()->route('chat.index');
    
    // }
    // public function enterChat($roomName)
    // {
    //     if (!Redis::exists("chat:{$roomName}")) {
    //         // Si la sala no existe o no está activa, redirigir al usuario a una página de error o a la lista de salas de chat disponibles
    //         return redirect()->route('chat.index')->with('error', 'La sala de chat no está disponible');
    //     }
    
    //     // Obtener los mensajes de la sala de chat desde Redis
    //     $messages = Redis::lrange("chat:{$roomName}", 0, -1);
    
    //     // Obtener los detalles del usuario que envió cada mensaje (aquí asumimos que los detalles están almacenados en Redis)
    //     $userMessages = [];
    //     foreach ($messages as $message) {
    //         $messageData = json_decode($message, true);
    //         // Aquí puedes obtener los detalles del usuario (por ejemplo, su nombre) según el ID del usuario en $messageData['user_id']
    //         // Asumiendo que el nombre del usuario se encuentra en Redis, puedes obtenerlo de la siguiente manera:
    //         $userName = Redis::hget("user:{$messageData['user_id']}", 'name');
    //         $userMessages[] = [
    //             'user_id' => $messageData['user_id'],
    //             'user_name' => $userName,
    //             'message' => $messageData['message'],
    //             'timestamp' => $messageData['timestamp']
    //         ];
    //     }
    
    //     // Devolver la vista de la sala de chat junto con los mensajes y los detalles del usuario
    //     return view('sala.salachat', [
    //         'roomName' => $roomName,
    //         'messages' => $userMessages
    //     ]);
    // }

    // codigo funcional para las salas de chat

//     public function ind()
//     {
//         // Obtener las salas de chat activas desde Redis
//         $chatRooms = Redis::smembers('active_chat_rooms');
//         $rooms = [];
//         foreach ($chatRooms as $salas) {
//             $room = new \stdClass();
//             $room->salas = $salas;
//             $rooms[] = $room;
//         }
//         return view('salachat.chatt', compact('rooms'));
//     }
    
       
   
//         public function show($chatRoom)
//         {
//             $messages = [];
//         return view('salachat.show', compact('chatRoom', 'messages'));
//         }
        
//         public function enterChat($roomName)
// {
//     // Obtener los mensajes y otros detalles de la sala de chat desde Redis
//     $messages = Redis::lrange("chat:{$roomName}", 0, -1);

//     return view('chat.enter', [
//         'roomName' => $roomName,
//         'messages' => array_map('json_decode', $messages)
//     ]);
// }
//     public function leave($salas)
//     {
//         Redis::srem('active_chat_rooms', $salas);

//         return redirect()->route('chat_rooms.index');
//     }
//     public function send(Request $request, $roomId)
//     {
//         $roomId = $request->input('room_id');
//         $message = $request->input('message');
//         $userId = auth()->id();

//         // Guardar el mensaje en Redis
//         $data = [
//             'user_id' => $userId,
//             'message' => $message,
//             'timestamp' => now()->timestamp
//         ];
//         Redis::rpush("chat:{$roomId}", json_encode($data));

//         // Emitir evento de mensaje a través de Laravel Echo
//         broadcast(new MessageSent($roomId, $data))->toOthers();

//         return response()->json(['success' => true]);
//     }
 // fin del codigo funcional para las salas de chat










//     public function enterChat(Request $request)
// {
//     // Obtener el nombre de la sala de chat del formulario o solicitud
//     $roomName = $request->input('roomName');

//     // Realizar la lógica para entrar a la sala de chat con el nombre $roomName
//     // Por ejemplo, puedes redirigir al usuario a la página de la sala de chat
//     return redirect()->route('chat.sala', ['roomName' => $roomName]);
// }
    // public function enterChat($chatRooms)
    // {
    //     if (!Redis::exists("chat:{$chatRooms}")) {
    //         // Si la sala no existe o no está activa, redirigir al usuario a una página de error o a la lista de salas de chat disponibles
    //         return redirect()->route('chat.index')->with('error', 'La sala de chat no está disponible');
    //     }
    
    //     // Obtener los mensajes de la sala de chat desde Redis
    //     $messages = Redis::lrange("chat:{$$chatRooms}", 0, -1);
    
    //     // Obtener los detalles del usuario que envió cada mensaje (aquí asumimos que los detalles están almacenados en Redis)
    //     $userMessages = [];
    //     foreach ($messages as $message) {
    //         $messageData = json_decode($message, true);
    //         // Aquí puedes obtener los detalles del usuario (por ejemplo, su nombre) según el ID del usuario en $messageData['user_id']
    //         // Asumiendo que el nombre del usuario se encuentra en Redis, puedes obtenerlo de la siguiente manera:
    //         $userName = Redis::hget("user:{$messageData['user_id']}", 'name');
    //         $userMessages[] = [
    //             'user_id' => $messageData['user_id'],
    //             'user_name' => $userName,
    //             'message' => $messageData['message'],
    //             'timestamp' => $messageData['timestamp']
    //         ];
    //     }
    
    //     // Devolver la vista de la sala de chat junto con los mensajes y los detalles del usuario
    //     return view('sala.salachat', [
    //         'chatRooms' => $chatRooms,
    //         'messages' => $userMessages
    //     ]);
    // }
//     public function close($chatRoomName)
//     {
//         // Eliminar la sala de chat de las salas activas en Redis
//         Redis::srem('active_chat_rooms', $chatRoomName);

//         return redirect()->route('salachat.chatt');
//     }
//     public function sendMessage(Request $request)
//     {
//         $roomId = $request->input('room_id');
//         $message = $request->input('message');
//         $userId = auth()->id();

//         // Guardar el mensaje en Redis
//         $data = [
//             'user_id' => $userId,
//             'message' => $message,
//             'timestamp' => now()->timestamp
//         ];
//         Redis::rpush("chat:{$roomId}", json_encode($data));

//         // Emitir evento de mensaje a través de Laravel Echo
//         broadcast(new MessageSent($roomId, $data))->toOthers();

//         return redirect()->back(); // Redireccionar de vuelta a la sala de chat
//     }

//     public function leave($roomName)
//     {
//         // Eliminar al usuario actual de la sala de chat en Redis
//         $userId = auth()->id();
//         Redis::srem("chat_users:{$roomName}", $userId);

//         return redirect()->route('home'); // Redireccionar a la página principal u otra vista
//     }
//     public function show($roomName)
// {
//     // Obtener los mensajes de la sala de chat desde Redis
//     $messages = Redis::lrange("chat:{$roomName}", 0, -1);

//     return view('salachat.show', [
//         'roomName' => $roomName,
//         'messages' => array_map('json_decode', $messages)
//     ]);
// }

// public function enter(Request $request)
//     {
//         // Validar el nombre de la sala de chat
//         $request->validate([
//             'roomName' => 'required|string|max:255', // Ajusta las reglas de validación según tus necesidades
//         ]);

//         // Obtener el nombre de la sala de chat desde la solicitud
//         $roomName = $request->input('roomName');

//         // Aquí puedes realizar cualquier lógica necesaria para unirse a la sala de chat,
//         // como verificar si la sala existe, si el usuario tiene permiso para unirse, etc.

//         // Por ejemplo, podrías simplemente redirigir al usuario a una página de chat con el nombre de la sala en la URL:
//         return redirect()->route('chat.sala', ['roomName' => $roomName]);
//     }
//     // public function sala()
//     // {
//     //     return view('salachat.sala');
//     // }

