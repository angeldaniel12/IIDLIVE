<?php

namespace App\Http\Controllers\Categoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria\CategoriaModel;
use Illuminate\Support\Facades\Auth;
use Models\Category;
use App\Models\Tag\TagModel;

class CategoriaController extends Controller
{
    public function _construct(){

    }
    

    public function Mostrar(){
        $titulo="Etiquetes";
        $categoria= CategoriaModel::select('id', 'nameCategoria')->get();
        $tag= TagModel::select('id', 'name', 'category_id')->get();
        $resultado = DB::select('select tags.id, categories.nameCategoria, tags.name, tags.category_id from categories inner join tags on 
        tags.category_id = categories.id');

        return view('creador.categoria.category', compact('categoria', 'tag', 'resultado'),['title'=>$titulo]);
    }

    public function AltaCategoria(Request $p){
        $categoria=$p->categoria;
        $subcategoria=$p->subcategoria;
        TagModel::create([
            'name' => $subcategoria,
            'category_id' => $categoria,
        ]);
        return redirect()->to('Etiqueta');
    }

    public function borrar(TagModel $tag)
    {
        if(Auth::id()!==$tag->user_id){
            return('Etiqueta');
        }
        // $categoria=$r->categoria;
        // $categoria->subcategoria()->detach();
        $tag->delete();
        return view('/');
    }


   

}
