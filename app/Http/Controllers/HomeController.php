<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Models\Category;
use App\Models\Follower as UserFollower;
use App\Models\User as UserModel;
use App\Models\Follower;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\VideoComment;
use App\Models\Photo;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Spatie\Searchable\Search;
use App\Models\Message;


class HomeController extends Controller
{
    // public function index(){
    //     return view('home');
    // }
    public function __construct()
    {
        
        $this->middleware('auth');
        $this->middleware('solocreador', ['only'=>['index']]);
        
    
    }
      public function saveCategories(Request $request)
{
    // Obtener las categorías seleccionadas desde el formulario
    $selectedCategories = $request->input('categories');

    // Obtener el ID del usuario autenticado, si está autenticado
    $userId = Auth::id();

    // Crear el nombre de la cookie para el usuario actual
    $cookieName = 'user_' . $userId . '_categories_selected';

    // Obtener la cookie existente si existe
    $existingCookieValue = $request->cookie($cookieName);

    // Fusionar las categorías seleccionadas con las existentes si hay alguna
    if ($existingCookieValue) {
        $existingCategories = json_decode($existingCookieValue, true);
        $mergedCategories = array_merge($existingCategories, $selectedCategories);
        $selectedCategories = array_unique($mergedCategories);
    }

    // Crear una nueva cookie con las categorías seleccionadas para el usuario actual
    $cookie = Cookie::make($cookieName, json_encode($selectedCategories));

    // Adjuntar la cookie a la respuesta
    return redirect()->route('home')->withCookie($cookie);
}


    public function relatedPosts()
    {
    $selectedCategories = [1, 3, 5]; // Ejemplo de categorías seleccionadas

    $relatedPosts = Post::whereIn('category_id', $selectedCategories)
                        ->orderBy('created_at', 'desc')
                        ->take(24)
                        ->get();

    return view('home', ['relatedPosts' => $relatedPosts]);
    }
    public function listSeguidores($id)
    {
        $user = User::find($id);
        // Obtener la lista de usuarios que siguen al usuario
        $followers = $user->followers;

        // Obtener la lista de usuarios seguidos por el usuario
        // dd($user);
        return view('seguidores', ['user'=>$user], ['followers'=>$followers]);
    }
    public function listSeguido()
    {
        $user    = Auth::user(); 
        //  $user = User::where('id', '!=', $users->id)
        //               ->where('role', '!=', '0')
        //               ->get();
        $following = $user->following;  
        return view('seguido',['following'=>$following,'user'=>$user]);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    public function rels($id) //Funcion que redirigira al perfil del usuario (Prueba1)
    {
        $tituloPagina="Reels";
        // $video=Video::all();
        $video=Video::findOrFail($id);
        
        $video->increment('home');
        return view('creador.archivo.Rels',compact('video'),['title'=>$tituloPagina]);
    }

    // public function store()
    // {
        
    //     Message::create([
    //         'sender_id'=>auth()-id(),
    //         'recipient_id'=> $request->recipient_id,
    //         'body'=>$request->body,
    //     ]);
    // }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     /*funciones para que nos muestres todas las vista que vamos a usar en
     en el proyecto.
    */
    
    public function index()
    {
        $titulo="Usuarios";
        $user=User::all();
        return view('admin.principal.usuarios',compact('user'),['title'=>$titulo]); 
    }
    public function show($id)
    {
        $comments = VideoComment::where('video_id', $id)->get();
        return view('home', compact('comments'));
    }

public function store(Request $request)
{
    $request->validate([
        'video_id' => 'required|exists:videos,id',
        'comment' => 'required|string',
    ]);

    VideoComment::create([
        'video_id' => $request->video_id,
        'user_id' => auth()->id(),
        'comment' => $request->comment,
    ]);

    return back()->with('success', 'Comment posted successfully.');
    }
    
public function creadores()
{
    $tituloPagina = "Inicio";

    $categories = Category::all();
    $tagss = Tag::all();
    $fotos = Photo::all();
    $userId = auth()->id();
    $users = User::select('users.*')
        ->whereNotIn('users.id', auth()->user()->following()->pluck('following_id'))
        ->where('role', '!=', '0')
        ->where('id', '!=', Auth::id())
        ->get();

    $followedUserIds = auth()->user()->following()->pluck('following_id');
    $followedPosts = Post::whereIn('user_id', $followedUserIds)->with('user')->latest()->get();
    $followedVideos = Video::whereIn('user_id', $followedUserIds)->latest()->get();
    $myPosts = Post::where('user_id', $userId)->with('user')->latest()->get();
    $myVideos = Video::where('user_id', $userId)->latest()->get();

    $posts = $followedPosts->merge($myPosts);
    $video = $followedVideos->merge($myVideos);

    // Crear el nombre de la cookie para el usuario actual
    $cookieName = 'user_' . $userId . '_categories_selected';

    // Obtener las categorías seleccionadas desde la cookie
    $selectedCategories = Cookie::has($cookieName) ? json_decode(Cookie::get($cookieName), true) : [];

    // Obtener los posts relacionados con las categorías seleccionadas
    $relatedPosts = Post::whereIn('category_id', $selectedCategories)
        ->orderBy('created_at', 'desc')
        ->take(24)
        ->get();
    /// Obtener las historias del usuario autenticado desde la sesión
    $misHistorias = session()->get('historias', []);

      // Obtener los seguidores del usuario autenticado
    $seguidores = Auth::user()->followers;

    // Crear un array para almacenar las historias de los seguidores
    $historiasSeguidores = [];

    // Obtener las historias de cada seguidor y almacenarlas en el array
    foreach ($seguidores as $seguidor) {
        // Verificar si hay historias para este seguidor en la sesión
        if (Session::has('historiasSeguidor_' . $seguidor->id)) {
            // Obtener las historias de este seguidor de la sesión
            $historiasSeguidores[$seguidor->id] = Session::get('historiasSeguidor_' . $seguidor->id);
        }
    }
     $userIds = auth()->id();

        $seguidoress = Follower::where('following_id', $userIds)->count();
        $seguidos = Follower::where('follower_id', $userIds)->count();
        $postess = Post::where('user_id', $userIds)->count();
        $videos = Video::where('user_id', $userIds)->count();

        $influencer = $seguidoress + $seguidos + $postess + $videos;


    return view('home', [
        'categories' => $categories,
        'tagss' => $tagss,
        'posts' => $posts,
        'video' => $video,
        'users' => $users,
        'fotos' => $fotos,
        'seguidoress'=> $seguidoress, 
        'seguidos' => $seguidos, 
        'postess' => $postess, 
        'videos' => $videos, 
        'influencer'=> $influencer,
       
        'misHistorias' => $misHistorias,
        'seguidores' => $seguidores,
        'historiasSeguidores' => $historiasSeguidores,  
        'relatedPosts' => $relatedPosts,
        
        'title' => $tituloPagina
    ]);
}
    public function likes($id){
        // Obtener el post específico por su ID
        $post = Post::findOrFail($id);

        // Obtener el conteo de likes del usuario autenticado para este post
        $userLikeCount = $post->likes()->where('user_id', auth()->id())->sum('count');

        // Calcular los likes restantes que puede dar el usuario (máximo 5)
        $remainingLikes = max(0, 5 - $userLikeCount);

        return view('home', compact('post', 'userLikeCount', 'remainingLikes'));
    }
  
    public function archivo()
    {
        $titulo="Subir archivos";
        return view('creador.archivo.files',['title'=>$titulo]);
    }

    public function verarchivo()
    {
        return view('creador.archivo.vistaArch');
    }

    public function ajustes()
    {
        $tituloPagina="Mis ajustes";
        return view('Ajustes',['title'=>$tituloPagina]);
    }

    public function actividad()
    {
        return view('Acti');
    }

    public function cambio()
    {
        $titulo="Cambio de contraseña";
        return view('cambioPassword',['title'=>$titulo]);
    }

    public function donaciones() 
    {
        return view ('Donaciones');
    }
    public function bloqueos()
    {
        return view ('Bloqueos');
    }

    public function espectador(){

      return view('viewnormal');

    }

    public function cultural()
   {

        return view('secult');

   }

   public function academic()
   {

        return view('secacad');

   }

   public function socialit()
   {

        return view('secsocial');

   }

   public function tecnology (){

        return view('sectecno');

   }

   public function lives(){

        return view('menulive');

   }
   public function salaPrincipal(){
    return view('salaprincipal');
}
    public function visualizar()
    {
        return view('visualizador');
    }

    public function Salas()
    {
     return view('lives');
    }

    public function Salas2()
    {
        return view ('lives2');
    }

    public function Salas3()
    {
        return view ('lives3');
    }

    public function Salas4()
    {
        return view ('lives4');
    }
    public function Salas5()
    {
        return view ('lives5');
    }
   

   public function Sala2()
   {
    return view('salas.presenteracad');
   }
   
   public function Sala3()
   {
    return view('salas.presentercult');
   }

   public function Sala4()
   {
    return view('salas.presentersocial');
   }

   public function Sala5()
   {
    return view('salas.presentertec');
   }

   public function Sala6()
   {
    return view('salas.presenterpoliti');
   }
   public function Sala7()
   {
    return view('salas.presenterdeport');
   }
   public function Sala8()
   {
    return view('salas.presentercine');
   }
   public function Sala9()
   {
    return view('salas.presenteralugar');
   }
   public function Sala10()
   {
    return view('salas.presenteraviaje');
   }
   public function Sala11()
   {
    return view('salas.presenteraSala5');
   }
   public function Sala12()
   {
    return view('salas.presenteraSala6');
   }
   public function Sala13()
   {
    return view('salas.presenteraSala7');
   }
   public function Sala14()
   {
    return view('salas.presenteraSala8');
   }
   public function Sala15()
   {
    return view('salas.presenteraSala9');
   }
   public function Sala16()
   {
    return view('salas.presenteraSala10');
   }

   public function sala()
   {
       return view('salachat.sala');
   }
//chats
public function chatt(){
    $titulo="Chats";
    $usuario = auth()->user(); 
    return view('chatt',['usuario' => $usuario],['title'=>$titulo]);
}


public function messages(){
    return Message::with('user')->get();
}

public function messageStore(Request $request){
    $user = Auth::user();

    $messages = $user->messages()->create([
        'message' => $request->message
    ]);

    broadcast(new SendMessage($user, $messages))->toOthers();

    return 'message sent';
}

   //Metodo general para las busquedas

   public function search(Request $request)
{
     $titulo = "Búsquedas";
// Realiza la búsqueda en los modelos especificados
$searchResults = (new Search())
    ->registerModel(Post::class, 'content')
    ->registerModel(User::class, 'id', 'nombre')
    ->perform($request->input('query'));

// Filtrar los resultados de búsqueda para excluir a los usuarios con rol 0 
// y los nombres "administrador" y "administrador2"
$filteredResults = $searchResults->filter(function ($result) {
    if ($result->searchable instanceof User) {
        return $result->searchable->role != 0 &&
               !in_array(strtolower($result->searchable->nombre), ['Administrador', 'Administrador2']);
    }
    return true; // Dejar pasar otros modelos como Post, etc.
});


    return view('search', compact('searchResults'),['title'=>$titulo]);
    /*$titulo="Busquedas";
    $searchResults = (new Search())
        ->registerModel(Post::class, 'content')
        ->registerModel(User::class, 'id' ,'nombre')
        //->registerModel(Archivos::class, 'nombres','documento')
        ->perform($request->input('query'));

    return view('search', compact('searchResults'),['title'=>$titulo]);*/
}
}