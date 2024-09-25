<?php

namespace App\Http\Controllers\Creador;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;
class TagsLeveController extends Controller
{
    public function byCategory($id){
       return Tag::where('category_id', $id)->get();
    }
}
