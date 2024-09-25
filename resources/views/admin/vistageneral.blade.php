@extends('layouts.admin')

@section('content')

<!-- vista para adminstrador lista de todos los post -->
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

              </div>
            </div>
              <div class="card bg-default shadow">  
                <div class="card-header bg-transparent border-0">
                <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="posts-table">
                <thead class="thead-dark">
                  <tr>
                    <!--th scope="col">ID</th-->
                    <th scope="col" >TITULO</th>
                    <th scope="col">INTRODUCCION</th>
                    <!--th scope="col">CONTENIDO</th-->
                    <th scope="col">FECHA CREACION</th>
                    <th scope="col">ACCIONES</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <!--td>{{ $post->id}}</td-->
                            <td> <span class="mb-0 text-sm text-white">
                            {{ $post->title}}
                           </span></td>
                            <td><span class="mb-0 text-sm text-white">{{ $post->excerpt}}  </span></td>
                            <!--td>{{ $post->body}}</td-->
                            <td><span class="mb-0 text-sm text-white">{{ $post->published_at}} </span></td>

                            <td>
                              <form action="{{route('admin.posts.edit',$post)}}">
                              <button  class="btn btn-info">Editar</button>

                              </form>
                              <form action="{{route('postes',$post)}}">
                              <button  class="btn btn-info">Ver</button>

                              </form>
                                
                                <form action="{{route('admin.posts.destroy', $post)}}" class="formulario-eliminar" 
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