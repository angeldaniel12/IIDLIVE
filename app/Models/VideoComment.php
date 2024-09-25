<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoComment extends Model
{
    use HasFactory;
    protected $fillable = ['video_id', 'user_id', 'comment'];
    protected $table = 'video_comments';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function video()
    {
        return $this->belongsTo(Video::class);
    }
    public function comments()
    {
        return $this->hasMany(VideoComment::class, 'video_id'); // 'video_id' es la clave externa en la tabla 'videocomments'
    }
  
}
