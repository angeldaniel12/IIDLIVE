<!-- use App\Http\Controllers\ChatGenController;
<h1>Salas de Chat Activas</h1>

<ul>
    @foreach($chatRooms as $chatRoom)
        <li>
            <form method="get" action="{{ route('chat.show', ['roomName' => $chatRoom]) }}">
                @csrf
                <button type="submit">{{ $chatRoom }}</button>
            </form>
        </li>
    @endforeach
</ul> -->