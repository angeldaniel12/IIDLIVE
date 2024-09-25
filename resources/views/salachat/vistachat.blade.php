@extends('layouts.app')

@section('content')
    <h1>Chat en {{ $chatRoom }}</h1>

    <div id="chat-messages">
        @foreach($messages as $message)
            <div>
                <strong>{{ $message['user_id'] }}:</strong> {{ $message['message'] }}
            </div>
        @endforeach
    </div>

    <form id="chat-form">
        <input type="text" name="message" placeholder="Escribe tu mensaje">
        <button type="submit">Enviar</button>
    </form>
@endsection

@section('scripts')
    <script>
        const roomId = {{ $roomId }};
        const chatForm = document.getElementById('chat-form');
        const chatMessages = document.getElementById('chat-messages');

        chatForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const message = chatForm.querySelector('input[name="message"]').value;
            chatForm.reset();

            axios.post('{{ route("chat.send") }}', { room_id: roomId, message })
                .then(response => console.log(response))
                .catch(error => console.error(error));
        });

        Echo.channel('chat.' + roomId)
            .listen('MessageSent', (e) => {
                const message = e.message;
                const messageElement = document.createElement('div');
                messageElement.innerHTML = `<strong>${message.user_id}:</strong> ${message.message}`;
                chatMessages.appendChild(messageElement);
            });
    </script>
@endsection