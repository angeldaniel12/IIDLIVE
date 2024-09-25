<?php

namespace App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    use HasFactory;
    protected $table= 'categories';
    protected $primarykey= 'id';
    public $timestamps = false;
    protected $fillable= ['id','name'];
    
}
