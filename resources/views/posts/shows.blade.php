@extends('layouts.panel2')

@section('content')
<!-- VISTA DE LECTURAS DE POST PARA CREADOR -->
  <article class="post image-w-text container">

    <div class="content-post">
      <header class="container-flex space-between">
        <div class="date">
          <span class="c-gris">{{$post->published_at}} / {{$post->owner->nombre}}

          </span>
        </div>
        <div class="post-category">
          <span class="category">
          <a href="">{{$post->category->nameCategoria}}</a></span>
            <!-- <a href="{{route('categories.ver', $post->category)}}">{{$post->category->nameCategoria}}</a></span> -->
        </div>
      </header>
      <h1>{{$post->content}}</h1>
        <div class="divider"></div>
        <div class="image-w-text">
        @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="Post Image">
                @endif
        </div>

        <footer class="container-flex space-between">
          
        <div class="tags container-flex">
						@forelse ($post->tags as $tag)
            <span class="tag c-gray-1 text-capitalize"><a>#{{ $tag->name }}</a></span>
            <!-- <span class="tag c-gray-1 text-capitalize"><a href="{{route('tags.show', $tag)}}">#{{ $tag->name }}</a></span> -->
            @empty
              <em>sin etiqueta</em>
              @endforelse
					</div>
      </footer>
    </div>
  </article>


@endsection