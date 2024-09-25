@extends('layouts.panel2')

@section('content')
<div class="container">
<div class="col-xl-8 mb-5 mb-xl-0">
        <div class="col-xl-4">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-3 mb-1"></h6>
                  <h5 class="mb-0">PDF'S COMPARTIDOS</h5>
                </div>
              </div>
            </div>
    </div>
</div>      
</div>
  <div class="container">
   
  <div class="row">
      @foreach ($documents as $doc)
       <div class="col">
              <div class="card">
               <!--poner nombre de los usuarios que publican la imagen  -->
              <iframe src="/Archivos/{{$doc->documento}}" style="width:75%; height: 500px;" frameborder="0"></iframe>
                    <h4>
                      <h4>
                      <div> <img src="{{ asset('uploads/avatars/'.$doc->user->fotos) }}"  class="img-fluid avatar-lg"> {{ $doc->owner->nombre}}
                          <div> {{$doc->documento}}</div>
                    </div>
                    </h4>
                    </h4>
                  
              </div>
      </div>
      @endforeach
  </div>

    <!-- <table class="table table-bordered ">
        <thead>TABLA DE DOCUMENTOS PDF
          
        
        @foreach ($documents as $doc)
            
              
              <img src="{{ asset('uploads/avatars/'.$doc->user->fotos) }}" class="img-fluid avatar-lg"> {{$doc->owner->nombre}}
            <{{$doc->nombres}}
              <a class="btn btn-success" href="/Archivos/{{$doc->documento}}" target="blank_">Ver Documento</a>
           
                @endforeach
       
      
      </table> -->
</div>
<!--       -->
</div>

@endsection