<?php

namespace App\Http\Controllers\Creador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Tag;
use App\Events\PostEvent;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PostNotification;
use App\Models\Post;
use App\Models\Like;
use App\Models\user;
use Illuminate\Support\Str;
use Illuminate\Notifications\DatabaseNotification;

use Illuminate\Support\Facades\DB;
//controlador de los contenidos de los posts
class PostController extends Controller
{
    public function index() 
    {
        /* funcion para mostrar los post de cada usuario */
       $titulo="Mis posts";
        $posts= Post::where('user_id', auth()->id())->get();
                
        return view('creador.posts.hh', compact('posts'),['title'=>$titulo]);
    }
        public function misPost()
    {
        $titulo="Mis publicaciones";
        $posts= Post::where('user_id', auth()->id())->get();
        return view('creador.publicacion.misPost', compact('posts'),['title'=>$titulo]);
    }
    
    public function ver()
    {
        $titulo="Vista post";
        return view('Postes',['title'=>$titulo]);
    }

    
    public function subcategorias(Request $request){
        if(isset($request->texto)){
            $etiquetas = Tag::where('category_id', $request->texto)->get();
            return response()->json(
                [
                    'lista' => $etiquetas,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );

        }

    }
    public function post(Request $request)
{
    // Validación
    $request->validate([
        'content' => 'nullable', // Hacer que el contenido sea opcional
        'category' => 'required',
        'tags' => 'nullable|array',
        'image' => 'nullable|image|mimes:jpg,jpeg,bmp,png,gif',
    ]);

    // Validar que al menos uno de 'content' o 'image' esté presente
    if (!$request->filled('content') && !$request->hasFile('image')) {
        return redirect()->back()->withErrors(['content' => 'El contenido o la imagen es requerida.'])->withInput();
    }

    $post = new Post();
    $post->content = $request->input('content', ''); // Establecer el contenido a una cadena vacía si no se proporciona
    $post->user_id = auth()->id();

    // Guardar la imagen si se proporciona
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $filename = Auth::id() . '_' . time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads/posts'), $filename);
        $post->image = $filename;

        // Agregar la imagen al contenido del post si se ha copiado una imagen
        if (empty($post->content)) {
            $post->content =  asset('uploads/posts/' . $filename);
        } else {
            $post->content .= asset('uploads/posts/' . $filename);
        }
    }

    // Limitar la longitud del contenido
    $maxContentLength = 255;
    if (strlen($post->content) > $maxContentLength) {
        $post->content = substr($post->content, 0, $maxContentLength);
    }

    $post->category_id = $request->get('category');
    $post->published_at = Carbon::now();
    $post->save();
    $post->tags()->sync($request->tags);

    // Generar un UUID para la notificación
    $notificationId = Str::uuid();
    // Guardar notificación en la tabla 'notifications'
    $notificationData = [
        'id' => $notificationId,
        'type' => 'App\Notifications\PostNotification',
        'notifiable_id' => Auth::id(),
        'notifiable_type' => 'App\Models\User',
        'data' => json_encode(['post_id' => $post->id, 'post_name' => $post->content, 'user_name' => $post->user->nombre]),
        'created_at' => now(),
        'updated_at' => now()
    ];
    DB::table('notifications')->insert($notificationData);

    return redirect()->back()->with('postnuevo', 'Post creado correctamente.');
}


   /* public function post(Request $request)
    { 
       
        $request->validate([
            'content' => 'required',
            'category' => 'required',
            'tags' => 'nullable|array',
            'image' => 'nullable|image|mimes:jpg,jpeg,bmp,png,gif',
        ]);
    
        $post = new Post();
        $post->content = $request->input('content');
        $post->user_id = auth()->id();
       
        // Guardar la imagen si se proporciona
  if ($request->hasFile('image') && $request->file('image')->isValid()) {
    $filename = Auth::id() . '_' . time() . '.' . $request->image->getClientOriginalName();
    $request->image->move(public_path('uploads/posts'), $filename);

    $post->image = $filename;
}
       
        $post->category_id = $request->get('category');
        $post->published_at = Carbon::now();
    
         $post->save();
        $post->tags()->sync($request->tags);
        // Generar un UUID para la notificación
    $notificationId = Str::uuid();
    // Guardar notificación en la tabla 'notifications'
    $notificationData = [
        'id' => $notificationId,
        'type' => 'App\Notifications\PostNotification',
        'notifiable_id' => Auth::id(),
        'notifiable_type' => 'App\Models\User', // O el modelo correspondiente
        'data' => json_encode(['post_id' => $post->id,
        'post_name'=>$post->content,
        'user_name' => $post->user->nombre
    ]),
        'created_at' => now(),
        'updated_at' => now()
    ];  
    DB::table('notifications')->insert($notificationData);
        
        return redirect()->back()->with('postnuevo', 'Posts creado correctamente.');
        }*/
       
    public function update(Request $request, $id)
{
    $request->validate([
        'content' => 'required',
        'category' => 'required',
        'tags' => 'required|array' // Asegúrate de que las etiquetas sean un arreglo
    ]);
    
    $post = Post::findOrFail($id);
    $post->content = $request->input('content');
    $post->category_id = $request->input('category');

    // Verificar si se proporciona una nueva imagen
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        
        // Eliminar la imagen anterior si existe
        if ($post->image) {
            $previousImagePath = public_path('uploads/posts/' . $post->image);
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
    
        // Guardar la nueva imagen
        $filename = Auth::id() . '_' . time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path('uploads/posts'), $filename);
        
        // Guardar el nombre de la nueva imagen en el modelo Post
        $post->image = $filename;
    }
    
    // Sincronizar las etiquetas del post
    $post->tags()->sync($request->get('tags'));
    
    // Asignar la fecha actual como fecha de publicación
    $post->published_at = Carbon::now();
    
    // Guardar los cambios en la publicación
    $post->save();
   
    return redirect()->back()->with('success', 'Posts se actualizó correctamente');
}

    //funcion para la creacion de un nuevo post
    public function store(Request $request, User $user)
    {

        $this->validate($request,['title'=>'required']);
        // $tags = Tag::all();
        
        $post = Post::create([
            'title' =>$request ->get('title'),
            'user_id' =>auth()->id()

            ]);
        
        
        return redirect()
        ->route('creador.post.edit', $post);
    }
   //funcion para la eliminacion de los post
   public function destroy(Post $post)
    {
        $post->tags()->detach();
        
    // Eliminar la imagen asociada al post, si existe
    if ($post->image) {
        // Asegúrate de que la imagen exista antes de intentar borrarla
        $imagePath = public_path('uploads/posts/' . $post->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Eliminar el post
    $post->delete();

    // Eliminar la notificación asociada al post, si existe
    DB::table('notifications')
        ->where('type', 'App\Notifications\PostNotification')
        ->where('data->post_id', $post->id)
        ->delete();
        
        return redirect()
            ->route('creador.publicacion.posts')
            ->with('post', 'Se elimino el post exitosamente.');
    }

    public function edit(Post $post)
    {
        $titulos="Editar ports";
        $categories = Category::all();
        $tags=Tag::all();
        $now= Carbon::now();
        $currentDate= $now->format('d-m-Y');
        return view('creador.posts.edit', compact('categories', 'tags', 'post','currentDate'),['title'=>$titulos]);
    }

    // //  //donde se agarrara los datos para el script del select
     public function getTags(Request $request)
     {
         if($request->ajax()){
             $Category=Tag::where('category_id', $request->category_id)->get();
             foreach($Category as $catego){
                 $categoArray[$catego->id]=$catego->name;
             }
             return response()->json($categoArray);
         }
     }
     //Notificacion de los post para los usuarios
    public function notif()
    {
        $titulo="Mis notificaicones";
        // Obtener el ID del usuario autenticado
    $userId = auth()->id();

    // Obtener los IDs de los usuarios que sigue el usuario autenticado
    $usuariosSeguidos = DB::table('followers')
        ->where('follower_id', $userId)
        ->pluck('following_id');

    // Obtener los IDs de los usuarios que siguen al usuario autenticado
    $seguidores = DB::table('followers')
        ->where('following_id', $userId)
        ->pluck('follower_id');

    // Combinar los IDs de los usuarios seguidos y seguidores, y eliminar duplicados
    $usuariosRelacionados = $usuariosSeguidos->merge($seguidores)->unique();

    // Obtener todas las notificaciones para los usuarios relacionados
    $postNotifications = DB::table('notifications')
        ->whereIn('notifiable_id', $usuariosRelacionados)
        ->where('notifiable_type', User::class)
        ->whereNull('read_at') // Solo notificaciones no leídas
        ->latest()
        ->get();

         return view('creador.posts.notificacion', compact('postNotifications'),['title'=>$titulo]);
    }
    //lectura de las notificaciones 
    public function markNotification($id)
    {
        $notification = DatabaseNotification::findOrFail($id);
    $notification->markAsRead();
        return response()->noContent();
    }

    // public function like(Request $request,Video $video)
    // {
    //     $selectedLikes = $request->input('likes');
    
    //     // Verificar si el usuario ya ha dado like a este video
    //     $existingLike = Like::where('user_id', auth()->id())
    //                         ->where('likeable_id', $video->id)
    //                         ->where('likeable_type', Video::class)
    //                         ->first();
    
    //     if ($existingLike) {
    //         // Si ya existe un like para este video, actualizar el campo 'count'
    //         $existingLike->count = min($existingLike->count + $selectedLikes, 5); // Limitar a un máximo de 5 likes
    //         $existingLike->save();
    //     } else {
    //         // Si no existe un like para este video, crear uno nuevo
    //         $like = new Like();
    //         $like->user_id = auth()->id();
    //         $like->likeable_id = $video->id;
    //         $like->likeable_type = Video::class;
    //         $like->count = min($selectedLikes, 5); // Limitar a un máximo de 5 likes
    //         $like->save();
    //     }
    
    //     // Redireccionar de vuelta al video
    //     return redirect()->route('home', $video->id)->with('success', 'Likes guardados exitosamente.');

    public function like(Post $post, Request $request)
    {
        $selectedLikes = $request->input('likesp');

        // Verificar si el usuario ya ha dado like a este post
        $existingLike = Like::where('user_id', auth()->id())
                            ->where('likeable_id', $post->id)
                            ->where('likeable_type', Post::class)
                            ->first();
    
        if ($existingLike) {
            // Si ya existe un like para este post, actualizar el campo 'count'
            $existingLike->count = min($existingLike->count + $selectedLikes, 5); // Limitar a un máximo de 5 likes
            $existingLike->save();
        } else {
            // Si no existe un like para este post, crear uno nuevo
            $like = new Like();
            $like->user_id = auth()->id();
            $like->likeable_id = $post->id;
            $like->likeable_type = Post::class;
            $like->count = min($selectedLikes, 5); // Limitar a un máximo de 5 likes
            $like->save();
        }
        // return back();
        // return response()->json(['success' => true]);
        // Redireccionar de vuelta al post
         return redirect()->route('home', $post->id);
    }

    public function unlike(Post $post)
    {
        // Buscar y eliminar el like del usuario al post
        $post->likes()->where('user_id', auth()->id())->delete();

        return back(); // Redirigir de vuelta a la página anterior
    }

    // public function like(Post $post)
    // {
    //     $userId = Auth::id();

    //     // Verificar si el usuario ya ha dado like a la publicación
    //     $existingLike = Likes::where('post_id', $post->id)
    //                         ->where('user_id', $userId)
    //                         ->first();

    //     if ($existingLike) {
    //         // Si ya ha dado like, eliminar el like
    //         $existingLike->delete();
    //         return redirect()->back()->with('success', 'Has dado unlike a la publicación.');
    //     } else {
    //         // Si no ha dado like, crear un nuevo like
    //         $like = new Likes();
    //         $like->post_id = $post->id;
    //         $like->user_id = $userId;
    //         $like->save();
    //         return redirect()->back()->with('success', 'Has dado like a la publicación.');
    //     }
    // }
    // public function post( Request $request)
    // {
        
    //     //validando 
    //     $this->validate($request, [
           
    //         'title' =>'required',
    //         'excerpt' => 'required',
    //         'body' => 'required',
    //         'category' => 'required',
    //         'tags' => 'required|array'
    //     ]);
    //     $post = [
    //         'title' =>$request ->get('title'),
    //         'user_id' =>auth()->id(),
    //         'excerpt'=>$request->get('excerpt'),
    //         'body'=>$request->get('body'),
    //         'category_id' => $request->get('category'), // Asumiendo que 'category_id' es el nombre correcto de la columna en tu tabla de posts
    //         'published_at' => Carbon::now()
            
    //         ];
           
    //         $post->tags()->sync($request->tags);
    //         $post->save();
    //         event(new PostEvent($post));
    //     // $post = new Post();
    //     // $post->title=$request->get('title');
    //     // $post->body=$request->get('body');
    //     // $post->excerpt=$request->get('excerpt');
    //     // $post->published_at=Carbon::now();
    //     // //$post->published_at= $request->has('published_at') ? Carbon::parse($request->get('published_at')):now();
    //     // $post->category_id=$request->get('category');
        
    //     // $tagss=$request->input('tagss');
    //     // $post->save();

    //     //  $post->tags()->sync($request->get('tagss'));
    //     return redirect()->back()->with('success', 'Publicación guardada correctamente',$post);

    // }


}