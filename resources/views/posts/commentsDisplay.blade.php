@foreach($comments as $comment)
    <div class="Comentarios" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <span class="avatar-title  rounded">
        <img src="{{ asset('uploads/avatars/'.$comment->user->fotos)}}"  class="img-fluid avatar-lg">
    </span>
        <strong>{{ $comment->user->nombre }}</strong>
        <p class="alert alert-light" role="alert">{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="body" placeholder="Agregar comentario">
            <input type="hidden" name="post_id" value="{{ $post_id }}" />
            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            <button class="btn btn-success" type="submit" id="button-addon2"><i class="fa fa-send"></i>Enviar</button>
            </div>
            <!-- <div class="form-group">
               
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-dark" value="Enviar" />
            </div> -->
        </form>
        @include('posts.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach  