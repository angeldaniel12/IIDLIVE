@foreach($comments as $comment)
    <div class="Comentarios" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <span class="avatar-title  rounded">
        <img src="{{ asset('uploads/avatars/'.Auth::user()->fotos) }}"  class="img-fluid avatar-lg">
    </span>
        <strong>{{ $comment->user->nombre }}</strong>
        <p class="alert alert" role="alert">{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <!--  -->
                <input type="text" name="body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-dark" value="Enviar" />
            </div>
        </form>
        @include('imagenes.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach  