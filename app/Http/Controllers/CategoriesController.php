<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria\CategoriaModel;

class CategoriesController extends Controller
{
    // public function index(){
    //    $todos=CategoriaModel::select('id', 'nameCategoria')->get();
    //    return view('admin.categoria.Categoria', compact('todos'));
    // }



    public function mostrar(Category $category)
    {
        
        return view('postes', [
            'title' => "Publicaciones de la Categoria '{$category->nameCategoria}' " ,
            'posts' =>$category->posts()->paginate(3)
    ]);
    // return  redirect()->route('postesNormal');
    }
public function obtener()
{
    $tages= Tag::where('category_id', $id)->get();
    return response()->json($tages);
}

public function ver()
{
    
    return view('creador.categoria.Categoria');
}

    public function nuevo(Request $request)
    { 
       $this->validate($request,[
        
        'nameCategoria' =>  'required'
                
    ]);
    $category= Category::Create([
        'nameCategoria'=> $request->get('nameCategoria')]);
        return redirect()->to('Category');
    }
    
}
