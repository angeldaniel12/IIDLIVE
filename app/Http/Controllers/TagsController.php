<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\BD;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
        return view('postes', 
        ['title' => "Publicaciones de la etiqueta -- '{$tag->name}'",
        'posts'=>$tag->posts()->paginate(4)
    ]);
    }
    public function bytags($id)
    {
       return Tag::where('category_id', $id)->get();
    }
    public function obtenerEtiquetas(Request $request)
    {
        $categoriaId = $request->input('categoria');
        $etiquetas = Tag::where('category_id', $categoriaId)->get();
        return response()->json($etiquetas);
    }
}
