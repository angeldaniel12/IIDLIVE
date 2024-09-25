<!-- codigos que posiblemente se usaran  -->
<!-- seccion de usuairos -->
<div class="container">
<div class="card-group card-group-scroll">
  @foreach ($users as $user)
    <div class="card">
        <img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top" alt="avatar" />
        <div class="card">
        <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>
        <p class="card-text">{{$user->descripcion}}</p>
        </div>
        <div class="card-footer">
        @if(auth()->user()->isNot($user))
  @if(auth()->user()->isFollowing($user))
      <form method="post" action="{{ route('unfollow', $user) }}">
          @csrf
          <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
      </form>
  @else
      <form method="post" action="{{ route('follow', $user) }}">
          @csrf
          <button class="btn btn-sm btn-success" type="submit">Seguir</button>
      </form>
  @endif
@endif
        </div>
       
    </div>
    <!-- <div class="card">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" alt="Palm Springs Road" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top" alt="Los Angeles Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.
            </p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/044.webp" class="card-img-top" alt="Hollywood Sign on The Hill" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
            </p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/045.webp" class="card-img-top" alt="Palm Springs Road" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/046.webp" class="card-img-top" alt="Los Angeles Skyscrapers" />
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.
            </p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div> -->
     @endforeach
</div>
</div>
</div>

<!-- seccion de reels -->
<div="card">
      
  <div class="scrolling-container">
      @foreach ($video as $videos)
        <div class="scrolling-card" style="width: 25rem;">
          <div class="card">
              <video id="my-video" autoplay muted style="max-width: 100%; height: 100%"controls>
                    <source src="{{ asset('rels/'. $videos->nombre)}}" type="video/mp4">
              </video> 
              <img src="{{ asset('uploads/avatars/'.$videos->user->fotos) }}" class="img-fluid avatar-lg"> {{ $videos->owner->nombreusuario}} / {{$videos->created_at->format('M d y')}}
                      {{$videos->descripcion}}
          </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
<style>


@media (min-width: 576px) {
    .card-group.card-group-scroll {
        overflow-x: auto;
       justify-content: space-between;
        flex-wrap: nowrap;
    }
}

.card-group.card-group-scroll > .card {
    flex-basis: 35%;
     justify-content: space-between;
    
}
</style>


<!-- <div class="carousel-item active">
                    
                                  
                                  <img src="{{asset('uploads/avatars/'.$user->fotos)}}">
                                    
                                      <p class="lead text-black fadeIn3 fadeInBottom">{{$user->nombreusuario}}</p>
                                      <a href="{{ route('perfilusuarios', $user->id) }}"><h5 class="lead text-wi opacity-8 fadeIn3 fadeInBottom">{{$user->nombre}}</h5></a>
                                        <p class="lead text-black opacity-8 fadeIn3 fadeInBottom">{{$user->descripcion}}</p>
                                        @if(auth()->user()->isNot($user))
                                                    @if(auth()->user()->isFollowing($user))
                                                <form method="post" action="{{ route('unfollow', $user) }}">
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
                                                </form>
                                            @else
                                                <form method="post" action="{{ route('follow', $user) }}">
                                                    @csrf
                                                    <button class="btn btn-sm btn-success" type="submit">Seguir</button>
                                                </form>
                                            @endif
                                          @endif
                                      </div>
                                  </div> -->

                                  <!-- <div class="container">
<div class="scrolling-buttons-container">
        <span class="scrolling-button-left"></span>
        <span class="scrolling-button-right"></span>
      </div>
  <div class="scrolling-container">
  @foreach ($users as $user)
  <div class="scrolling-card">

  <div class="card" style="width: 18rem;">
<img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top"  >
<div class="card-body">
  <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>

  <p class="card-text">{{$user->descripcion}}</p>
  @if(auth()->user()->isNot($user))
  @if(auth()->user()->isFollowing($user))
      <form method="post" action="{{ route('unfollow', $user) }}">
          @csrf
          <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
      </form>
  @else
      <form method="post" action="{{ route('follow', $user) }}">
          @csrf
          <button class="btn btn-sm btn-success" type="submit">Seguir</button>
      </form>
  @endif
@endif
</div>
</div>


  @endforeach
  </div>
  </div>
  </div> -->


<!-- este no
   <ul class="list-group list-group-horizontal" id="nombre">
  <li class="list-group-item">
  @foreach ($users as $user)
  <div class="card" style="width: 18rem;">
<img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top"  >
<div class="card-body">
  <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>

  <p class="card-text">{{$user->descripcion}}</p>
  @if(auth()->user()->isNot($user))
  @if(auth()->user()->isFollowing($user))
      <form method="post" action="{{ route('unfollow', $user) }}">
          @csrf
          <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
      </form>
  @else
      <form method="post" action="{{ route('follow', $user) }}">
          @csrf
          <button class="btn btn-sm btn-success" type="submit">Seguir</button>
      </form>
  @endif
@endif
</div>
</div>


  @endforeach
  </li>
   -->


<!-- @foreach ($users as $user)


    <div class="card" style="width: 18rem;">
  <img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top"  >
  <div class="card-body">
    <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>

    <p class="card-text">{{$user->descripcion}}</p>
    @if(auth()->user()->isNot($user))
    @if(auth()->user()->isFollowing($user))
        <form method="post" action="{{ route('unfollow', $user) }}">
            @csrf
            <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
        </form>
    @else
        <form method="post" action="{{ route('follow', $user) }}">
            @csrf
            <button class="btn btn-sm btn-success" type="submit">Seguir</button>
        </form>
    @endif
@endif
  </div>
</div>


    @endforeach -->
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->

  <!-- <div id="carouselExampleControls" class="carousel-slide d-bloc w-20" data-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top" >
      <div class="card-body">
        <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>

            <p class="card-text">{{$user->descripcion}}</p>
            @if(auth()->user()->isNot($user))
            @if(auth()->user()->isFollowing($user))
                <form method="post" action="{{ route('unfollow', $user) }}">
                    @csrf
                    <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
                </form>
            @else
                <form method="post" action="{{ route('follow', $user) }}">
                   @csrf
                    <button class="btn btn-sm btn-success" type="submit">Seguir</button>
                </form>
            @endif
        @endif
      </div>
      <a class="carousel-control-prev"  role="button" data-slide="prev">
      <span class="carosuel-control-prev-icon" arial-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" role="button" data-slide="next">
      <span class="carosuel-control-next-icon" arial-hidden="true"></span>
      <span class="sr-only">next</span>
    </a>
      </div>
    </div>

  </div> -->
   <!-- <div class="card" style="width: 18rem;">
  <img src="{{ asset('uploads/avatars/'.$user->fotos) }}" class="card-img-top"  >
  <div class="card-body">
    <a href="{{ route('perfilusuarios', $user->id) }}" class="card-title"><h5>{{$user->nombre }}</h5></a>

    <p class="card-text">{{$user->descripcion}}</p>
    @if(auth()->user()->isNot($user))
    @if(auth()->user()->isFollowing($user))
        <form method="post" action="{{ route('unfollow', $user) }}">
            @csrf
            <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
        </form>
    @else
        <form method="post" action="{{ route('follow', $user) }}">
            @csrf
            <button class="btn btn-sm btn-success" type="submit">Seguir</button>
        </form>
    @endif
@endif
  </div>
</div>  -->



      <!-- carrusel de reels -->

<!--
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="card">
  @foreach ($video as $videos)
    <div class="carousel-item active">
    <video id="my-video" autoplay muted style="max-width: 100%; height: 100%"controls>
    <source src="{{ asset('rels/'. $videos->nombre)}}" type="video/mp4">
    </video>
    <img src="{{ asset('uploads/avatars/'.$videos->user->fotos) }}" class="img-fluid avatar-lg"> {{ $videos->owner->nombreusuario}} / {{$videos->created_at->format('M d y')}}
           {{$videos->descripcion}}
    </div>

    @endforeach
  </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
       -->

       <!-- reals -->
       <!-- <div class="scrolling-container">
  @foreach ($video as $videos)
        <div class="scrolling-card" style="width: 25rem;">
          <div class="card">
              <video id="my-video" MUTED autoplay style="max-width: 100%; height: 100%"controls>
                    <source src="{{ asset('rels/'. $videos->nombre)}}" type="video/mp4">
              </video>
              <img src="{{ asset('uploads/avatars/'.$videos->user->fotos) }}" class="img-fluid avatar-lg"> {{ $videos->owner->nombreusuario}} / {{$videos->created_at->format('M d y')}}
                      {{$videos->descripcion}}
          </div>
        </div>
        @endforeach
    </div> -->

@endsection
<!-- <script>
const rightBtn = document.querySelector("#scrolling-button-right");
const leftBtn = document.querySelector("#scrolling-button-left");

const content = document.querySelector(".scrolling-container");

rightBtn.addEventListener("click", () => {
  content.scrollLeft += 800;
});

leftBtn.addEventListener("click", () => {
  content.scrollLeft -= 800;
});
</script>
<style>
  .scrolling-container {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  scroll-behavior: smooth;
}

.scrolling-card {
  flex: 0 0 auto;
  border: solid 2px auto;
  margin: 20px;
  width: auto;
  height: auto;
  text-align: auto;
}

/* .scrolling-container::-webkit-scrollbar {
  display: none;
} */

.scrolling-buttons-container {
  display: flex;
  justify-content: space-between;
  font-size: 50px;
  margin-left: 50px;
  margin-right: 50px;
}
</style> -->

@foreach ($following as $followerd)
            <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{ asset('uploads/avatars/'.$followerd->fotos) }}" class="img-fluid rounded-start" alt="">
                        </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$followerd->nombre}}</h5>
                            @if(auth()->user()->isNot($followerd))
                      @if(auth()->user()->isFollowing($followerd))
                          <form method="post" action="{{ route('unfollow', $followerd) }}">
                              @csrf
                              <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
                          </form>
                      @else
                          <form method="post" action="{{ route('follow', $followerd) }}">
                              @csrf
                              <button class="btn btn-sm btn-success" type="submit">Seguir</button>
                          </form>
                      @endif
                    @endif
                            
                            </div>
                          </div>
                      </div>
                    </div>
            @endforeach





            <form id="form-seguidores" action="{{route('perfiles',$id)}}"  method="POST">
                        @csrf
                      <i class="dropdown-item" class="dropdow-item" data-bs-toggle="modal" data-bs-target="#seguidos">Seguidores</i>
                        </form>
                      

                  <div class="modal fade" id="seguidos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">lista de siguiendo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
      <div class="py-3 text-center">
        
      
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
                     
                    </div> 


            @foreach ($followers as $follower)
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{ asset('uploads/avatars/'.$follower->fotos) }}" class="img-fluid rounded-start" alt="">
                        </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$follower->nombre}}</h5>
                            @if(auth()->user()->isNot($follower))
                      @if(auth()->user()->isFollowing($follower))
                          <form method="post" action="{{ route('unfollow', $follower) }}">
                              @csrf
                              <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
                          </form>
                      @else
                          <form method="post" action="{{ route('follow', $follower) }}">
                              @csrf
                              <button class="btn btn-sm btn-success" type="submit">Seguir</button>
                          </form>
                      @endif
                    @endif
                            
                            </div>
                          </div>
                      </div>
                    </div>
                    <!-- <ul class="list-group">
                    
                      <li class="list-group-item"><img src="{{ asset('uploads/avatars/'.$follower->fotos) }}"  style="width: 10rem;" class="card-img-top" alt="avatar">{{$follower->nombre}}</li>
                    </ul> -->
                  
            @endforeach



            @foreach ($followers as $follower)
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{ asset('uploads/avatars/'.$follower->fotos) }}" class="img-fluid rounded-start" alt="">
                        </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$follower->nombre}}</h5>
                            @if(auth()->user()->isNot($follower))
                      @if(auth()->user()->isFollowing($follower))
                          <form method="post" action="{{ route('unfollow', $follower) }}">
                              @csrf
                              <button class="btn btn-sm btn-danger" type="submit">Dejar de seguir</button>
                          </form>
                      @else
                          <form method="post" action="{{ route('follow', $follower) }}">
                              @csrf
                              <button class="btn btn-sm btn-success" type="submit">Seguir</button>
                          </form>
                      @endif
                    @endif
                            
                            </div>
                          </div>
                      </div>
                    </div>
                    <!-- <ul class="list-group">
                    
                      <li class="list-group-item"><img src="{{ asset('uploads/avatars/'.$follower->fotos) }}"  style="width: 10rem;" class="card-img-top" alt="avatar">{{$follower->nombre}}</li>
                    </ul> -->
                  
            @endforeach