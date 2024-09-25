<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'likeable_id', 'likeable_type'];
    // protected $fillable = [
    //     'user_id', 'video_id',
    // ];
    public function likeable()
    {
        return $this->morphTo();
    }

    // Relación con el usuario que dio el like
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}