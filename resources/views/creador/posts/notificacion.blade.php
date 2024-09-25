@extends('layouts.panel2')

@section('content')
<div class="container">
    <div class="row justify-container-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Notificaciones</div>
                    <div class="card-body">
                    @if (auth()->check())
    @forelse ($postNotifications as $notification)
        <div class="alert alert-warning">
        @if (isset($notification->data['post_name']))
    <p>Nombre del Post: {{ $notification->data['post_name'] }}</p>
@else
    <p>No se encontró el nombre del post en esta notificación.</p>
@endif
            @if (isset($notification->data['user_name']))
                <p>Usuario: {{ $notification->data['user_name'] }}</p>
            @endif
            <p>{{ \Carbon\Carbon::parse($notification->created_at)->diffForHumans() }}</p>
            <button type="submit" class="mark-as-read btn btn-sm btn-dark" data-id="{{ $notification->id }}">Marcar como leído</button>
        </div>
    @empty
        <p>No hay notificaciones</p>
    @endforelse
@endif
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function sendMarkRequest(id = null){
        return $.ajax("{{ route('markAsRead', ['id' => ':id']) }}".replace(':id', id),{
            method:'POST',
            data: {token: "{{ csrf_token() }}",
            id
            }
        });
    }
    $(function(){
        $('.mark-as-read').click(function(){
            let request= sendMarkRequest($(this).data('id'));
            request.done(()=>{
                $(this).parents('div.alert').remove();
            });
        });
        $('#mark-all').click(function(){
            let request=sendMarkRequest();
            request.done(()=>{
                $('div.alert').remove();
            });
        });
    });
</script>
@endsection