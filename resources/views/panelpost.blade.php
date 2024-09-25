@extends('layouts.welcomeinv')

@section('content')
<div class="row justify-content-center">
        <!--  -->
        <div class="col-10 col-md-12"> 
            <nav class="text-center my-5">
            <a href="{{route ('home')}}" class="btn btn-warning {{isset($categoryIdSelected)?'': 'select-category'}}">Todos</a>
                @foreach ($categories as $category)
                <a href="{{route ('categorias.cate', $category->nameCategoria)}}" class="btn btn-default {{(isset($categoryIdSelected)&&$category->id==$categoryIdSelected)? 'selected-category':''}}">{{$category->nameCategoria}}</a>
               
                @endforeach
               
            </nav>
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
				<h1>{{ $post->title}}</h1>
				<div class="divider"></div>
				<p>{{$post->excerpt}}</p>
				<footer class="container-flex space-between">
					<div class="read-more">
						<a class="text-uppercase c-green">Leer Mas</a>
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
       
    

    


</div>
@endsection