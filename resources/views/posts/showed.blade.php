@extends('layouts.panel2')

@section('content')


<!-- VISTA DE LECTURA PARA NORMAL -->
<article class="post image-w-text container">

    <div class="content-post">
      <header class="container-flex space-between">
        <div class="date">
          <span class="c-gris">{{$posts->published_at}} / {{$posts->owner->nombre}}

          </span>
        </div>
        <div class="post-category">
          <span class="category">
               <a href="{{route('categories.ver', $posts->category)}}">{{$posts->category->nameCategoria}}</a></span>
        </div>
      </header>
      <h8>{{$posts->content}}</h8>
        <div class="divider"></div>
        <div class="image-w-text">
        @if ($posts->image)
                    <img src="{{ asset('storage/' . $posts->image) }}" class="img-fluid" alt="Post Image">
                @endif
        </div>

        <footer class="container-flex space-between">
          
        <div class="tags container-flex">
						@forelse ($posts->tags as $tag)
            <span class="tag c-gray-1 text-capitalize"><a>#{{ $tag->name }}</a></span>
            <!-- <span class="tag c-gray-1 text-capitalize"><a href="{{route('tags.show', $tag)}}">#{{ $tag->name }}</a></span> -->
            @empty
              <em>sin etiqueta</em>
              @endforelse
					</div>
      </footer>
    </div>
  </article>

<h6>Sala de Comentarios</h6>
  
                    @include('posts.commentsDisplay', ['comments' => $posts->comments, 'post_id' => $posts->id])
   
                    <hr />
                    <h6>Agregar Comentario</h6>
                    
                    <form method="post" action="{{ route('comments.store'   ) }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $posts->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Agrega" />
                        </div>
                    </form>
</div>


				

@endsection