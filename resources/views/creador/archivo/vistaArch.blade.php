@extends('layouts.panel2')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

@section('content')
<!--  -->
<div class="col-xl-8 mb-5 mb-xl-0">
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Tablas de Documentos</h6>
                  <h2 class="mb-0">PDF</h2>
                </div>
              </div>
            </div>
    </div>
</div>      
</div>
<div class="container">
  
<div class="row">
      @foreach ($pdfs as $pdf)
       <div class="col">
              <div class="card">
               <!--poner nombre de los usuarios que publican la imagen  -->
              <iframe src="/Archivos/{{$pdf->documento}}" style="width:75%; height: 500px;" frameborder="0"></iframe>
                    <h6>
                      <h6>
                      <div> <img src="{{ asset('uploads/avatars/'.$pdf->user->fotos) }}"  class="img-fluid avatar-lg"> {{ $pdf->owner->nombre}}
                          <div> {{$pdf->documento}}</div>
                          @if(auth()->check() && auth()->user()->id == $pdf->user_id)

                          <form action="{{route('creador.archivo.eliminar',$pdf->id)}}" method="POST">
                          @csrf
                          @method('DELETE')

                            <button type="submit" class="btn btn-danger" >Eliminar</button>
                          </form>
                          @endif 
                    </div>
                    </h6>
                    </h6>
                  
              </div>
      </div>
      @endforeach
  </div>
    
    <!-- <table class="table align-items-center mb-0">
        <thead>__________________________________________________________________________________
          <tr>
            
            <th scope="col">Titulo</th>
            <th scope="col">Acciones</th>
            
           </tr>
        </thead>
        <tbody>
        @foreach ($pdfs as $pdf)
            <tr>
            <td>{{$pdf->nombres}}</td>
                    <td><a class="btn btn-success" href="/Archivos/{{$pdf->documento}}" target="blank_">Ver Documento</a>
                     @if(auth()->check() && auth()->user()->id == $pdf->user_id)

                    <form action="{{route('creador.archivo.eliminar',$pdf->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                 
                      <button type="submit" class="btn btn-danger" >Eliminar</button>
                    </form>
                     @endif 
                    </td>   
                </tr>
                @endforeach
        </tbody>
      
      </table>
</div>
             -->
            <script scr="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script scr="https://code.jquery.com/jquery-1.11.1.min.js"></script>

@endsection