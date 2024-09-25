@extends('layouts.panel2') <!-- La vista de la que se va a heredar es panel, 
buscar la forma de darle funcion a los botones de acuerdo a lo que ya tenemos desde la vista Panel -->
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js" integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css" integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q==" crossorigin="anonymous"

  referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
@endsection
@section('content')
<!-- Pegamos el codigo del Container-->
<!--  corregir seleccion multiple -->

<div class="col-xl-10 mb-5 mb-xl-0">
        <div class="col-xl-8">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-0">Editar Publicaciones</h6>
                  <h2 class="mb-0">POSTS</h2>
                </div>
              </div>
            </div>
          </div>
          
        </div> 
             
      </div>
      <div class="col-xl-20 order-xl-1">
          <div class="card bg-secondary shadow">
            
            <div class="card-body">
              <form method="POST" action="{{route('creador.posts.update', $post->id)}}" enctype="multipart/form-data" class="formulario-editar">
                {{csrf_field()}} {{method_field('PUT')}}
                <div class="form-group">
        <label for="content">Contenido:</label>
        <textarea class="form-control" id="content" name="content" rows="3">{{ $post->content }}</textarea>
    </div>

    <div class="form-group">
    <label for="image">Imagen:</label><br>
    <input type="file" class="form-control" id="image" name="image" required>
    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="Post Image">
    @endif
  
</div>

    
    <div class="form-group">
        <label for="published_at" class="form-control-label">Fecha de Publicación</label>
        <input class="form-control" placeholder="Fecha de publicación" type="text" readonly="readonly" value="{{ $currentDate }}" name="published_at">
    </div>
    <div class="mb-3">
                <label for="categoria" class="form-label">Categorías</label>
                <select class="form-select" id="categoria" name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nameCategoria }}</option>
                    @endforeach
                </select>
                {!! $errors->first('category', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="mb-3" id="etiquetas">
                <label for="etiquetas" class="form-label">Etiquetas</label>
                <!-- Las etiquetas se llenarán dinámicamente con JavaScript -->
                {!! $errors->first('tags', '<span class="text-danger">:message</span>') !!}
            </div>
   
                  </div>
                  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Si hay un mensaje de error, mostrarlo -->
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
                   </div>  
                   
                      <button type="submit"  class="btn btn-primary mt-4">Guardar</button>
                 
                   
              </form>
              
            </div>
            
          </div>
</div> 
    
@endsection
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var etiquetasContainer = document.getElementById("etiquetas");

    var selectCategoria = document.getElementById("categoria");

    // Manejar el cambio en la selección de categoría
    selectCategoria.addEventListener("change", function() {
        var categoriaSeleccionada = selectCategoria.value;

        // Realizar una solicitud AJAX para obtener las etiquetas relacionadas
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                // Limpiar el contenedor de etiquetas
                etiquetasContainer.innerHTML = "";
                // Llenar el contenedor de etiquetas con checkboxes
                data.forEach(function(etiqueta) {
                    var checkboxDiv = document.createElement("div");
                    checkboxDiv.classList.add("form-check", "form-check-inline");

                    var checkboxInput = document.createElement("input");
                    checkboxInput.classList.add("form-check-input");
                    checkboxInput.type = "checkbox";
                    checkboxInput.name = "tags[]";
                    checkboxInput.value = etiqueta.id;

                    var checkboxLabel = document.createElement("label");
                    checkboxLabel.classList.add("form-check-label");
                    checkboxLabel.textContent = etiqueta.name;

                    checkboxDiv.appendChild(checkboxInput);
                    checkboxDiv.appendChild(checkboxLabel);
                    etiquetasContainer.appendChild(checkboxDiv);
                });
            }
        };
        xhr.open("GET", "/obtener-etiquetas?categoria=" + categoriaSeleccionada, true);
        xhr.send();
    });

    // Al cargar la página, asegurarse de cargar las etiquetas para la categoría inicialmente seleccionada
    selectCategoria.dispatchEvent(new Event('change'));
});
</script>
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js" integrity="sha512-yrOmjPdp8qH8hgLfWpSFhC/+R9Cj9USL8uJxYIveJZGAiedxyIxwNw4RsLDlcjNlIRR4kkHaDHSmNHAkxFTmgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <script>
 


<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
 
   <script>
    // se llama para poder seleccionar mas de 1 etiqueta
    $('select').selectpicker();
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      $('.formulario-editar').submit(function(e){
      Swal.fire({
  position: 'top-end',
  icon: 'Guardado',
  title: 'Tu post ha sido actualizado con exito',
  showConfirmButton: false,
  timer: 1500
})
});
 </script>

  <script src="/js/post/edits.js"></script> 
<!-- <script src="{{asset('/js/post/edits.js')}}"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>  
 