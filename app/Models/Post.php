<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Support\Facades\Auth;
use App\Models\Likes;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Post extends Model implements Searchable
{
    protected $casts = [
        'data' => 'array',
    ];
    protected $guarded= [];
    use HasFactory;
    protected $fillable = ['content', 'image', 'user_id','published_at'];
    // protected $fillable= ['title', 'body', 'category_id', 'excerpt', 'user_id','published_at','likes'];
    protected $dates =['published_at'];
    
 /**funciones donde estaran las reaciones de la categoria, tags, user_id y la fecha
  * del post.
  */
  public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
   
    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopePublished($query)
    {
        $query = Post::whereNotNull('published_at')
        ->where('published_at','=>', Carbon::now())
        ->latest('published_at');
    }

   //Metodo para busqueda de Post
public function getSearchResult(): SearchResult 
{
    $url = route('perfilusuarios', $this->id);

    return new SearchResult(
        $this,
        $this->content,
        $url
    );
}
public function likes()
{
    return $this->morphMany(Like::class, 'likeable');
}
// public function likes()
//     {
//         return $this->hasMany(Like::class);
//     }
// }

// class Like extends Model
// {
//     protected $fillable = ['user_id', 'post_id'];
    
//     public function post()
//     {
//         return $this->belongsTo(Post::class);
//     }

// public function LikedBy($userId)
// {
//     return $this->likes()->where('user_id', $userId)->exists();
// }
// public function likes()
// {
//     return $this->hasMany(Like::class);
// }

}
