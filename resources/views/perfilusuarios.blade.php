
@extends('layouts.panel2')


@section('content')

<div class="col-xl-4 order-xl-2 mb-5 mb-xl-5">

          <div class="card card-profile shadow" >
            <div class="row justify-content-center">
              <div class="col-lg-0 order-lg-2">
                <div class="card">
                  
                  <img src="{{ asset('uploads/avatars/'.$useres->fotos) }}" style="width: 100%;" alt="Avatar">
                  
                
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <!-- <a href="#" class="btn btn-sm btn-info mr-4">Connect </a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a> -->
                
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              
              <div class="text-center">
                <h7>
                Nombre: <span class="font-weight-light">{{ $useres->nombre }}</span>
                <div></div>
               Usuario: <span class="font-weight-light">{{ $useres->nombreusuario }}</span>
                </h7>
                <h7>
                <div class="h5 font-weight-300">
                  Pais:<span class="font-weight-light">{{$useres->pais}}</spam>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>{{$useres->email}}
                </div>
                <div>
                  <i class="ni education_hat mr-2">Sobre mi: </i>{{$useres->descripcion}}
                </div>
                </h7>
                <!-- <a href="#">Show more</a> -->
            
              </div>
            </div>
            
          </div>
          <!--  -->
          
          <!--  -->
        </div>
</div> 


        
        @foreach ($posts as $post)
        <article class="post no-image">
			<div class="content-post">
				<header class="container-flex space-between">
					<div class="date">
						<span class="c-gray-1">{{ $post->published_at->format('d/M/Y')}} / {{$post->owner->nombre}}
                            

						</span>
					</div>
					<div class="post-category">
						<span class="category text-capitalize">{{$post->category->nameCategoria}}</span>
					</div>
				</header>
				<h1> {{ substr($post->content, 0, 50) }} @if (strlen($post->content) > 50) ... @endif </h1>
				<div class="divider"></div>
				<p>{{$post->image }}</p>
        @if ($post->image)
              
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="Post Image">
                @endif
				<footer class="container-flex space-between">
					<div class="read-more">
						<a href="/blogs/{{$post->id}}"class="text-uppercase c-green">Leer Mas</a>
					</div>
					<div class="tags container-flex">
						
					</div>
				</footer>
			</div>
		</article>
 
        @endforeach
       
        
@endsection