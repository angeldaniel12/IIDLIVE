<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Photo extends Model
{
    /* Funcion para hacer la relacion con los usuarios y solo se pueda ver
    las imagenes de cada persona que los suba */
    protected $fillable =['url', 'user_id','descripcion'];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
