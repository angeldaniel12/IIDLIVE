<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class InvitadosController extends Controller
{
    
    //Controlador para las vistas de Usuarios Invitados 

    public function start(){
    $rels=Video::all();
    return view('panelinv',compact('rels'));

    }

    public function end(){

     return view('welcome');

    }
    public function postByCategory($category)
    {
        $categories = Category::all();
        $category =Category::where('nameCategoria','=',$category)->first();
        $categoryIdSelected=$category->id;
        $posts=Post::where('category_id', '=', $categoryIdSelected)->paginate(3);
        return view('panelpost', [
            'categories'=>$categories,
            'posts' => $posts,
            'categoryIdSelected'=> $categoryIdSelected
        ]);
    }
    public function Postss(){
      $categories=Category::all();
      $posts=Post::all();
        return view('panelpost',['categories'=> $categories, 'posts'=>$posts]);
      // $posts= Post::find($id);
      // return view('panelpost.showed',array('user' => Auth::user()), compact('posts'));
      // return view('panelpost');
    }
    // public function Posts()
    // {
    //     $rels=Video::all();
    //     return view('panelinv', compact('rels'));
    // }


    // public function lives() {

    //     //return view('livestreaminv');
      
    //      }
      
    //   public function invitcult (){
      
    //     return view('invcult');
      
    //   }
      
    //   public function invitacad(){
      
    //      return view ('invacad');
      
    //   }
      
    //   public function invitec (){
      
    //     return view ('invtec');
    //   }
      
    //   public function invitsociet (){
      
    //     return view ('invsocial');
    //   }
     
      
}
