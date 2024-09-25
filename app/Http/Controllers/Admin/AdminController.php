<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Auth;
use App\Models\Post;
use App\Models\User;
use App\Models\Archivos;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Follower;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        
    
        $this->middleware('admin');
        // $this->middleware('adminmiddleware', ['only'=> ['index']]);
    }
     public function ventana()
     {
       
        return view('admin.principal.videosR'); 
        
     }

     public function relss()
     {
        $titulo="Reel";
        $video=Video::all();
        return view('admin.principal.rels',compact('video'),['title'=>$titulo]); 
        
     }
    
    public function usuarios()
    {
        $user=User::all();
       $titulo="Lista usuarios";
        return view('admin.principal.usuarios', compact('user'),['title'=>$titulo]);
    }
    

    public function posts()
    {
        $poste=Post::all();
        $titulo="Lista posts";
        return view('admin.principal.posts', compact('poste'),['title'=>$titulo]);
    }
    public function imagenes()
    {
        $imag=Photo::all();
       $titulo="Lista imagenes";
        return view('admin.principal.imagenes',['imag'=> $imag],['title'=>$titulo]);
    }

    public function document()
    {
        $titulo="Lista documentos";
        $document=Archivos::all();
        return view('admin.principal.documents', compact('document'),['title'=>$titulo]);
    }
     //funcion para borrar archivos de usarios
     public function borrardoc($id)
     {
        $archi = Archivos::find($id);
        Storage::disk('public')->delete($archi->nombres); 
        $archi-> delete();
        
        return  redirect()->route('admin.principal.documents');
        
     }

     public function avatar(Request $request)
     {
        $this->validate($request, [
           
            'fotos' => '|image|mimes:png,jpg,jpeg,gif1|max:2048',
            
        ]);
        //$filename = Auth::id().'_'.time().'.'.$request->fotos->getClientOriginalName();
        $filename = $request->file('fotos')->getClientOriginalName();
        $request->fotos->move(public_path('uploads/avatars'), $filename);
     
        $user = Auth::user();
        $user->fotos = $filename;
        $user->save();
    
         return redirect()
         ->route('admin.principal.usuarios',array('users' => Auth::user()));
     
    //  $filename = Auth::id().'_'.time().'.'.$request->avatar->getClientOriginalName();
    //  $request->avatar->move(public_path('uploads/avatars'), $filename);
  
    //  $admin = Auth::user();
    //  $admin->avatar = $filename;
    //  $admin->save();
        
    //  return redirect()
    //      ->route('admin.principal.usuarios',array('users' => Auth::user()));
         
     }

   
    public function borrar($id)
    {
        $video = Video::find($id);
        Storage::disk('public')->delete($video -> nombre); 
        $video -> delete();
        return redirect()
            ->route('admin.principal.rels');
    }

    //funcion para borrar posts para los usuarios
    public function destroy(Post $post)
    {
        $post->tags()->detach();
        $post->delete();

        return redirect()
            ->route('admin.principal.posts');
           
    }
    //funcion para borrar usuarios 
    public function borrarUser($id)
    {
        $user= User::find($id);
        $user->delete();
     
        return redirect()
            ->route('admin.principal.usuarios');
            
    }

    public function desactivar($id)
    {
        if (Auth::guard($id)->check() && auth()->user()->active == 0) {

            // usuario con sesión iniciada pero inactivo
        
            // cerramos su sesión
            Auth::guard()->logout();
        
            // invalidamos su sesión
            $request->session()->invalidate();
        
            // redireccionamos a donde queremos
            redirect('admin.principal.usuarios');
        }
    }
   
      //funcion para borrar imagenes de usuarios
      public function destroyI(Photo $photo)
      {
          $imagen = str_replace('storage', 'public',$photo->url);
          Storage::delete($imagen);
          $photo->delete();
          return redirect()->route('admin.principal.imagenes');
      }

}
