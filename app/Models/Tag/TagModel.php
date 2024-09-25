<?php

namespace App\Models\Tag;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    use HasFactory;
    protected $table= 'tags';
    protected $primarykey= 'id';
    public $timestamps = false;
    protected $fillable= ['id','name', 'category_id'];
}
