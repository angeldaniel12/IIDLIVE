<div>
    <h3><strong>Ultimos mensajes</strong></h3>
    <div class="card-body">
    
    @foreach ($mensajes as $mensaje )
    <div class="alert alert-success" style="margin-left: 50px;">
                            <strong>{{$mensaje["usuario"]}}</strong>
                            <br><span class="text-muted">{{$mensaje["mensaje"]}}</span>
                        </div><small class="badge float-right badge-danger">{{$mensaje["usuario"]}}</small>
        
    @endforeach
    </div>

    <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('13c3eb70959381ceb37f', {
      cluster: 'us2'
    });

    var channel = pusher.subscribe('chat-channel');
    channel.bind('chat-event', function(data) {
      //alert(JSON.stringify(data));
      window.livewire.emit("mensajeRecibido",data);
    });
  </script>
</div>
