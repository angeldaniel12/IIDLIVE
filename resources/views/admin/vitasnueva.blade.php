@extends('layout.admin')

@section('content')
<!-- VITAS PARA EL ADMINISTADOR DE USUARIOS -->
<div class="card bg-default shadow">  
                <div class="card-header bg-transparent border-0">
                <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="posts-table">
                <thead class="thead-dark">
                  <tr>
                    <!--th scope="col">ID</th-->
                    <th scope="col" >ID</th>
                    <th scope="col">USUARIOS</th>
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
                           
                           </span></td>
                            <td><span class="mb-0 text-sm text-white">  </span></td>
                            <!--td>{{ $post->body}}</td-->
                            <td><span class="mb-0 text-sm text-white"> </span></td>

                            <td>
                              <form action="/">
                              <button  class="btn btn-info">Editar</button>

                              </form>
                              <form action="/">
                              <button  class="btn btn-info">Ver</button>

                              </form>
                                
                                <form action="/" class="formulario-eliminar" 
                                      method="POST" style="display : inline">
                                             
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