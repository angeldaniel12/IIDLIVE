@extends('layouts.panel2') <!-- La vista de la que se va a heredar es panel, 
buscar la forma de darle funcion a los botones de acuerdo a lo que ya tenemos desde la vista Panel -->
<script src="{{ asset ('js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset ('js/plugins/jquery/dist/jquery.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@section('content')
<div class="col-xl-8 mb-5 mb-xl-0">
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Tablas de Publicaciones</h6>
                  <h2 class="mb-0">POSTS</h2>
                </div>
              </div>
              
              </div>
            </div>
            
    </div>
</div>      
</div>


              
               <h3 class="mb-0">_____________________________________________________________________________________________________</h3> 
              <!-- Button trigger modal -->

              </div>
            </div>
              <div class="card bg-default shadow">  
                <div class="card-header bg-transparent border-0">
                <div class="table-responsive">
                @if(session('post'))
                                    <div class="alert alert-success">
                                        {{ session('post') }}
                                    </div>
                                @endif
              <table class="table align-items-center table-dark table-flush" id="posts-table">
                <thead class="thead-dark">
                  <tr>
                    <!--th scope="col">ID</th-->
                    <th scope="col" >CONTENIDO</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">ETIQUETA</th>
                    <th scope="col">IMAGEN</th>
                    <!--th scope="col">CONTENIDO</th-->
                    <th scope="col">FECHA CREACION</th>
                    <th scope="col">LIKES</th>
                    <th scope="col">ACCIONES</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <!--td>{{ $post->id}}</td-->
                            <td> <span class="mb-0 text-sm text-white">

                            {{ substr($post->content, 0, 50) }} @if (strlen($post->content) > 50) ... @endif 
                            <!-- {{ $post->content}}  -->
                           </span></td>
                           <td> <span class="mb-0 text-sm text-white">
                            {{$post->category->nameCategoria}}
                           </span></td>
                           <td> <span class="mb-0 text-sm text-white">
                           @forelse ($post->tags as $tag)
                    #{{ $tag->name }} 
                @empty
                    Sin etiquetas
                @endforelse
                           </span></td>
                            <td><span class="mb-0 text-sm text-white">  
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="Post Image">
                           </span></td>
                            <!--td>{{ $post->body}}</td-->
                            <td><span class="mb-0 text-sm text-white">{{ $post->published_at}} </span></td>
                            <td><span class="mb-0 text-sm text-white">{{ $post->likes()->sum('count') }} star</span></td>
                            <td>
                              <form action="{{route('creador.posts.edit',$post)}}">
                              <button  class="btn btn-info">Editar</button>

                              </form> 
                              <form action="{{route('postes',$post)}}">
                              <button  class="btn btn-info">Ver</button>

                              </form>
                                
                                <form action="{{route('creador.posts.destroy', $post)}}" class="formulario-eliminar" 
                                      method="POST" style="display : inline">
                                             {{csrf_field()}} {{method_field('DELETE')}}
                                <button  class="btn btn-danger" >Eliminar</button>
                              
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              </div>
            </div>
            </div>
            @section('script')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     @if(session('eliminar') == 'ok')
        <script>
          Swal.fire(
            'Eliminada',
            'Tu pots ha sido borrado con exito.',
            'Exitoso'
          )
            </script>
        @endif
  <script>
    $('.formulario-eliminar').submit(function(e){
      e.preventDefault();
      Swal.fire({
  title: 'Deseas borrar este post? ',
  text: "Esta accion no se puede deshacer",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si!'
}).then((result) => {
  if (result.isConfirmed) {
      
    this.submit();
  }
})
    });
  </script>
  @endsection           
           
@stop
