<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    //use HasFactory;
    /* Modelo de Archivos para el llamado de los campos */
    protected $table='archivo_file';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable =[
        'nombres',
        'documento',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function archivo_file()
    {
        return $this->belongsToMany(archivos::class);
    }
}
