<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    // protected $table='rels';
    protected $fillable =['nombre','descripcion','user_id', 'views', 'likes'];
    use HasFactory;

     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function owner()
     {
         return $this->belongsTo(User::class,'user_id');
     }

     public function isLikedBy($userId)
    {
        return $this->likes()->where('user_id', $userId)->exists();
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
    public function comments()
    {
        return $this->hasMany(VideoComment::class, 'video_id'); // 'video_id' es la clave externa en la tabla 'videocomments'
    }
}
