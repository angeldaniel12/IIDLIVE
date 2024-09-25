<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function home()
    {
        $posts=Post::published()->get();
        return view ('welcome', compact('posts'));
    } 

    /*public function show($id)
    {
        return view('posts.show', compact('post'));
    }*/
}
