<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'post_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
//     </div>
//     <form action="{{ route('posts.like', $poste->id) }}" method="POST">
// @csrf
// @if ($poste->isLikedBy(auth()->id()))
// <button type="submit" class="btn btn-primary">Unlike</button>
// @else
// <button type="submit" class="btn btn-primary">Like</button>
// @endif
// </form>
//   </div> 
}
