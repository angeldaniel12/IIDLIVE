<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    /*funcion para mostrar los post en una ventana especifica */
    public function show($id)
    {
        $titulo="Post";
        $post= Post::find($id);
    return view('posts.shows', compact('post'),['title'=>$titulo]);
    }
   
    public function index()
    {
        
        $userWithCount= Post::withCount('user_id')->get();
        return view('home', compact('userWithCount'));
    }

    public function admin($id)
    {
        $titulo="Post";
        $post= Post::all();
        return view('admin.principal.posts', compact('postt'),['title'=>$titulo]);
    }
   


}
