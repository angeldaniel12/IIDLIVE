@extends('layouts.panel2')

@section('content')
<div class="col-7">
    
    <div class="d-grid gap-2 d-md-block">
  <a href="{{route('creador.publicacion.reels')}}"  class="btn btn-light" type="button">Mis reels</a>
  <a href="{{route('creador.publicacion.posts')}}" class="btn btn-light" type="button">Mis post</a>
  <!-- <a href="{{route('seguidores')}}" class="btn btn-outline-primary" type="button">Seguidores</a>
                <a href="{{route('seguido')}}" class="btn btn-outline-secindary" type="button">Seguido</a> -->

    </div>
</div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0"></script>

<?php
function getLinkContent($url) {
    $options = [
        "http" => [
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36\r\n"
        ]
    ];
    $context = stream_context_create($options);
    $content = file_get_contents($url, false, $context);
    return $content !== false ? $content : null;
}

// Define la función para extraer el título de la página
function extractLinkTitle($content) {
    preg_match('/<title>(.*?)<\/title>/s', $content, $matches);
    return !empty($matches[1]) ? htmlspecialchars($matches[1]) : null;
}

// Define la función para extraer la descripción de la página
function extractLinkDescription($content) {
    preg_match('/<meta name="description" content="(.*?)"/s', $content, $matches);
    return !empty($matches[1]) ? htmlspecialchars($matches[1]) : null;
}

// Define la función para extraer la imagen de la página
function extractLinkImage($content) {
    preg_match('/<meta property="og:image" content="(.*?)"/s', $content, $matches);
    return !empty($matches[1]) ? htmlspecialchars($matches[1]) : null;
}
?>

@foreach ($posts as $post)

<article class="post no-image">
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                           <span class="c-gray-1">{{ $post->published_at->format('d/M/Y')}} - {{$post->owner->nombre}} - {{ $post->likes()->sum('count') }} star</span>
                       
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">{{$post->category->nameCategoria}}</span>
                    </div>
                </header>
                <h8 class="w-auto"> 
                <?php
                $postContent = $post->content;
$postContentWithLinks = preg_replace_callback('/\b(https?:\/\/\S+)\b/', function($matches) {
    $url = $matches[1];
    $linkContent = getLinkContent($url);
    
    if ($linkContent !== null) {
        // Extraer información del enlace
        $linkTitle = extractLinkTitle($linkContent);
        $linkDescription = extractLinkDescription($linkContent);
        $linkImage = extractLinkImage($linkContent);

        // Mostrar el enlace con su contenido
        $result = '<div class="url-info">';
        $result .= !empty($linkTitle) ? '<h4>' . $linkTitle . '</h4>' : '';
        $result .= !empty($linkDescription) ? '<p>' . $linkDescription . '</p>' : '';
        $result .= '</div>';
        $result .= !empty($linkImage) ? '<div class="url-image"><img src="' . $linkImage . '" class="img-fluid" alt="URL Image"></div>' : '';
        $result .= '<a href="' . htmlspecialchars($url) . '" target="_blank">' . htmlspecialchars($url) . '</a>';
        
        return $result;
    } else {
        // Si no se puede obtener el contenido del enlace, mostrar solo el enlace
        return '<a href="' . htmlspecialchars($url) . '" target="_blank">' . htmlspecialchars($url) . '</a>';
    }
}, $postContent);

echo $postContentWithLinks;
                ?>
            </h8>
                <div class="divider"></div>
                @if ($post->image)
                    <img src="{{ asset('uploads/posts/' . $post->image) }}" class="img-fluid" alt="Post Image">
                @endif
                <footer class="container-flex space-between">
                <div class="d-grid gap-2 d-md-block">
    <div class="row align-items-center">
        <div class="col-md-6">
            <form action="{{ route('creador.posts.edit', $post) }}">
                <button class="btn btn-info">Editar</button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="{{ route('creador.posts.destroy', $post) }}" class="formulario-eliminar" method="POST" style="display: inline;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>

                   <!-- <div class="d-grid gap-2 d-md-block">
                    <form action="{{route('creador.posts.edit',$post)}}">
                              <button  class="btn btn-info">Editar</button>

                              </form> 
                                
                                <form action="{{route('creador.posts.destroy', $post)}}" class="formulario-eliminar" 
                                      method="POST" style="display : inline">
                                             {{csrf_field()}} {{method_field('DELETE')}}
                                <button  class="btn btn-danger" >Eliminar</button>
                              
                                </form>
                    </div>      -->
                    
                    <div class="tags container-flex">
                        @forelse($post->tags as $tag)
                            <span class="tag c-gray-1 text-capitalize">#{{ $tag->name }}</span>
                        @empty
                            <em>sin etiqueta</em>
                        @endforelse
                    </div>
                </footer>
            </div>
</article>
@endforeach

@endsection