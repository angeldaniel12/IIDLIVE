@extends('layouts.panel2')
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
@section('content')
<div class="container">
  
    <div class="row justify-content-center">
        <!--  -->
        <div class="col-10 col-md-12"> 
            <nav class="text-center my-5">
            <a href="{{route('lectura')}}" class="btn btn-warning {{isset($categoryIdSelected)?'': 'select-category'}}">Todos</a>
                @foreach ($categories as $category)
                <a href="{{route('posts.category',$category->nameCategoria)}}" class="btn btn-primary {{(isset($categoryIdSelected)&&$category->id==$categoryIdSelected)? 'selected-category':''}}">{{$category->nameCategoria}}</a>
               
                @endforeach
               
            </nav>
        </div> 
     <?php

// Verificar si la función getLinkContent() no está definida antes de declararla
if (!function_exists('getLinkContent')) {
    // Definir la función getLinkContent() solo si no está definida
    function getLinkContent($url) {
        $content = file_get_contents($url);
        if ($content !== false) {
            return $content;
        } else {
            return null;
        }
    }
}

// Verificar si la función extractLinkTitle() no está definida antes de declararla
if (!function_exists('extractLinkTitle')) {
    // Definir la función extractLinkTitle() solo si no está definida
    function extractLinkTitle($content) {
        preg_match('/<title>(.*?)<\/title>/s', $content, $matches);
        return !empty($matches[1]) ? $matches[1] : null;
    }
}

// Verificar si la función extractLinkDescription() no está definida antes de declararla
if (!function_exists('extractLinkDescription')) {
    // Definir la función extractLinkDescription() solo si no está definida
    function extractLinkDescription($content) {
        preg_match('/<meta name="description" content="(.*?)"/s', $content, $matches);
        return !empty($matches[1]) ? $matches[1] : null;
    }
}

// Verificar si la función extractLinkImage() no está definida antes de declararla
if (!function_exists('extractLinkImage')) {
    // Definir la función extractLinkImage() solo si no está definida
    function extractLinkImage($content) {
        preg_match('/<meta property="og:image" content="(.*?)"/s', $content, $matches);
        return !empty($matches[1]) ? $matches[1] : null;
    }
}

require '../vendor/autoload.php';  // Asegúrate de que esta línea esté presente

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;

use Symfony\Component\DomCrawler\Crawler;
function getLinkContent($url) {
    // Utiliza cURL o file_get_contents para obtener el contenido
    $content = @file_get_contents($url);
    return $content ?: null; // Devuelve null si no se puede obtener el contenido
}

// Función para extraer el título del contenido del enlace
function extractLinkTitle($linkContent) {
    if (preg_match('/<title>(.*?)<\/title>/', $linkContent, $matches)) {
        return $matches[1];
    }
    return null; // Devuelve null si no se encuentra el título
}

// Función para extraer la descripción del contenido del enlace
function extractLinkDescription($linkContent) {
    if (preg_match('/<meta name="description" content="(.*?)"/', $linkContent, $matches)) {
        return $matches[1];
    }
    return null; // Devuelve null si no se encuentra la descripción
}

// Función para extraer la imagen del contenido del enlace
function extractLinkImage($linkContent) {
    if (preg_match('/<meta property="og:image" content="(.*?)"/', $linkContent, $matches)) {
        return $matches[1];
    }
    return null; // Devuelve null si no se encuentra la imagen
}

?>
@if(count($posts) > 0)
@foreach ($posts as $post)
<article class="post no-image ">
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                        <span class="c-gray-1">{{ $post->published_at->format('d/M/Y')}} / {{$post->owner->nombre}}</span>
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">{{$post->category->nameCategoria}}</span>
                    </div>
                </header>
                <h8 style="font-family:monospace;">
                <?php
                // Analizar el contenido del post
$postContent = $post->content;

$postContentWithLinks = preg_replace_callback('/\b(https?:\/\/\S+)\b/', function($matches) {
    $url = $matches[1];
    $linkContent = getLinkContent($url);

    if ($linkContent !== false) { // Comprueba si se pudo obtener el contenido del enlace
        $linkTitle = extractLinkTitle($linkContent);
        $linkDescription = extractLinkDescription($linkContent);
        $linkImage = extractLinkImage($linkContent);

        // Si no hay descripción, no mostrar nada
        if (!$linkDescription) {
            return 'null';
        }

        // Mostrar el enlace con su contenido
        $html = '<div class="url-info">';
        $html .= '<h4>' . htmlspecialchars($linkTitle) . '</h4>';
        $html .= '<p>' . htmlspecialchars($linkDescription) . '</p>';
        if ($linkImage) {
            $html .= '<div class="url-image"><img src="' . htmlspecialchars($linkImage) . '" class="img-fluid"></div>';
        }
        $html .= '</div>';
        $html .= '<a href="' . htmlspecialchars($url) . '" target="_blank">' . htmlspecialchars($url) . '</a>';
        return $html;
    } else {
        // Si no se puede obtener el contenido del enlace, mostrar solo el enlace
        return 'null';
    }
}, $postContent);

echo $postContentWithLinks;
                ?></h8>
                <div class="divider"></div>
                @if ($post->image)
                    <img src="{{ asset('uploads/posts/' . $post->image) }}"class="img-fluid" alt="Post Image">
                @endif
                <footer class="container-flex space-between">
                    <div class="read-more">
                        <a href="blogs/{{$post->id}}"class="text-uppercase c-green">Leer Mas</a>
                    </div>
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

@else
    <div class="alert alert-info" role="alert">
        No hay publicaciones disponibles.
    </div>
@endif

</div>
@endsection
    