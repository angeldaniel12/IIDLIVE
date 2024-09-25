<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'nameCategoria'
    ];
    /*Funciones del modelo para la categoria donde se 
    hara las reaciones con otras tablas */
    public function getRouteKeyName()
    {
        return 'nameCategoria';
    }
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function subcategoria(){
        return $this->hasMany("App\Models\Tag");
    }
}
