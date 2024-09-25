<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'category_id'
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function categoria(){
        return $this->belongsTo("App\Models\Category");
    }

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
