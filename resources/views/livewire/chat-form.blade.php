
<div class="">
    <div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control"  wire:model="nombre"  id="usuario" >
        @error("nombre")
        <small class="text-danger">{{$message}}</small>
            
        @enderror
        
    </div>
    <div class="form-group">
        <label for="nombre">Mensaje:</label>
        <p class="emoji-picker-container">
                <input type="text" class="form-control" data-emojiable="true" 
                id="nombre"  wire:model="mensaje" >
        </p>
    </div>
    <button class="btn btn-primary" wire:click="enviarMensaje">Enviar</button>

    <div style="position: absolute; top:30px; right:30px;"
    class="alert alert-success collapse mt-3"
    role="alert" id="avisoSuccess">se ha envido

    </div>
    <script>
        window.livewire.on("mensajeEnviado", function(){
            $("#avisoSuccess").fadeIn("slow");
            setTimeout(function(){$("#avisoSuccess").fadeOut("slow");},3000)
            
          e.preventDefault();
        
        });
    </script>
    
</div>
</div>

