<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NormalController;
// use App\Http\Controllers\Creador\PostController;
use App\Http\Controllers\Creador\PostController;
use App\Http\Controllers\Creador\UsersController;
use App\Http\Controllers\Creador\PhotoController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ListadoController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use App\Models\User;
use App\Models\Photo;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Archivos;
use App\Events\SocketIOEvent;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/publicacion/{id}', 'PostsController@publicView')->name('post.public');


Route::get('/videos/{id}', 'NormalController@publicViewReel')->name('Reelss.publics');


Route::middleware(['auth'])->group(function(){
   
});

Route::get('markAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsRead');
// 

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/videos/{video}', 'ReelController@show')->name('videos.show');

// require __DIR__.'/auth.php';

Route::get('/check-name', [UsersController::class, 'checkName'])->name('check.name'); //para el reconocimiento de usuarios en el registro

//chat
Route::get('/chats', 'HomeController@chats')->name('chats');

Route::get('messages', 'HomeController@messages')
            ->name('messages');

Route::post('messages', 'HomeController@messageStore')
            ->name('messageStore');
Route::get('/salasInicio', 'HomeController@salaPrincipal')->name('principal');



Route::get('/documentos', 'NormalController@Documentos')->name('docuementos');
Route::get('/Posts', 'NormalController@listas')->name('lectura');
Route::get('/vistas', 'NormalController@Visuales')->name('views');
Route::get('/vistas2', 'NormalController@Visuales2')->name('views2');

// chats
//Route::view('message', 'VistaChat')->middleware('auth');

// Route::get('/chat', 'NormalController@chts')->name('index');
// //Vistas como usuario espectador
// Route::get('home', 'HomeController@index')-> middleware('auth');
//  Route::get('/home', 'NormalControlller@nuevos')->name('nuevos')->middleware('verified');

// Route::post('/comments','CommentController@store')->name('comments.store');//insertar comentarios
Route::post('/comments/store', 'CommentController@store')->name('comments.store');


Route::get('/post','NormalController@post')->name('todo');
Route::get('/seguidores','NormalController@index')->name('listaSeguido');
Route::get('/posts/{category}', 'NormalController@postByCategory')->name('posts.category');//filtratro por categoria en Normalx
Route::get('blogs/{id}', 'NormalController@show')->name('postess');//lectura para post por categoria Normal
//Route::get('posts/blogs/{id}', 'NormalController@show')->name('postess');//lectura para todos los post Normal
Route::get('/imagenes', 'NormalController@imagenes')->name('fotos');
Route::get('/fotos', 'NormalController@fotosG');
Route::get('/videos', 'NormalController@videos')->name('videos');
Route::get('/pr贸ximanente', 'NormalController@proxima')->name('proximamente');
//perfiles
Route::get('/users', 'NormalController@userser')->name('lista');
Route::get('/perfiles/{id}', 'NormalController@perfiles')->name('perfilusuarios');

//----------------------------------------------------------------------
Route::get('creadores', 'HomeController@creadores')->name('creadores')->middleware('auth');
// Route::resource('/home', HomeController::class)->middleware('verified');
//panel de ajustes
Route::get('/', 'PagesController@home');
//chat
 Route::get('/chats', 'HomeController@chatt')->name('chatt');
// Route::get('/seguidores/{id}/seg', 'HomeController@listSeguidores')->name('seguidores');
// Route::get('seguidores/{id}/followers', 'Users@listSeguidores')->name('seguidores');
// Route::get('/seguido', 'UsersController@listSeguido')->name('seguido');
Route::get('ajustes', 'HomeController@ajustes')->name('Ajustest');
Route::get('actividad' ,'HomeController@actividad');
Route::get('/videos/{id}', 'HomeController@show');
Route::get('/likes', 'HomeController@likes');
Route::post('/comments', 'HomeController@store')->name('video-comments.store');
Route::post('/save-categories', 'HomeController@saveCategories')->name('save-categories');
Route::get('/related-posts', 'HomeController@relatedPosts')->name('related-posts');
//cambio de contrase帽a
Route::get('Password','HomeController@cambio');

Route::POST('password/cambio','passwordController@updatePassword');

//bloqueos
Route::get('Bloqueo', 'HomeController@bloqueos');

Route::get('Donaciones', 'HomeController@donaciones');
//----------------------------------------

//Ruta para dirigir al modo creador
// Route::get('/viewnormal', 'HomeController@espectador')->name('espectador');
//---------------------------------------------------//
Route::get('blog/{id}', 'PostsController@show')->name('postes');
Route::get('Categorias/{category}', 'CategoriesController@mostrar')->name('categories.ver');
Route::get('Etiquetas/{tag}', 'TagsController@show')->name('tags.show');
Route::get('/obtener-etiquetas', 'TagsController@obtenerEtiquetas');
Route::get('/categorias/{id}', 'CategoriesController@obtener');

//rutas para guardar archivos y ver archivos en pdf

Route::get('/archivo/archivo', 'HomeController@archivo')->name('creador.archivo.files');
Route::get('/archivo/ver','ListadoController@ver')->name('creador.archivo.vistaArch');
// Route::get('/archivo/archivo', 'HomeController@archivo')->name('admin.archivo.files');
// Route::get('/archivo/ver','ListadoController@ver')->name('admin.archivo.vistaArch');


// Route::post('/ArchivoSubido','ArchivosController@insertar')->name('admin.archivo.Subidos');
// Route::get('/Listado', 'ListadoController@ver')->name('admin.archivo.ver');
// Route::delete('/Borrar', 'ArchivosController@destroy')->name('admin.archivo.eliminar');
Route::post('/ArchivoSubido','ArchivosController@insertar')->name('creador.archivo.Subidos');
Route::get('/Listado', 'ListadoController@ver')->name('creador.archivo.ver');
Route::delete('/Borrar/{id}', 'ArchivosController@destroy')->name('creador.archivo.eliminar');

// cambiar prefijo a creador
Route::group(['prefix'=>'creador', 'namespace'=>'Creador', 'middleware'=>'auth'],
    function(){
        Route::post('cargar/', 'PhotoController@store')->name('creador.archivo.store');
        Route::get('/imgen','PhotoController@index')->name('creador.archivo.ima');
        Route::delete('borrar/{photo}}', 'PhotoController@destroy')->name('creador.archivo.destroy');
        //rels  
        Route::post('/videos', 'ReelController@videoss')->name('creador.archivo.cargar');
        Route::get('/videos', 'ReelController@ver')->name('creador.archivo.ver');
        Route::post('/videos/{video}/like', 'ReelController@like')->name('videos.like');
        // Route::post('/comments', 'ReelController@store')->name('video-comments.store');
               //rutas de mis publicaciones
        Route::get('/mis-Reels', 'ReelController@miReels')->name('creador.publicacion.reels');
        
        Route::get('/videos/{id}', 'ReelController@show')->name('videos.show');

        //borrar rels
        Route::delete('/borrar/{id}', 'ReelController@quitar')->name('creador.archivo.borrar');

        // Route::post('cargar/', 'PhotoController@store')->name('admin.archivo.store');
        // Route::get('/imgen','PhotoController@index')->name('admin.archivo.ima');
        // Route::delete('borrar/{photo}}', 'PhotoController@destroy')->name('admin.archivo.destroy');
        //Route::resource('/admin/image', 'Admin\PhotoController')->names('admin.archivo.imagen');
        //Route::post('archi', 'ArchivosController@storeFile')->name('archivo.guardar');
       
    }
  
);


// Route::get('/Rels', 'HomeController@rels')->name('Rels');

 //--------------------------------------------------------//


//Rutas para Usuarios Invitados
Route::get('/invitados', 'InvitadosController@start')->name('start');
Route::get('/', function () {
    return redirect()->route('end');
});
Route::get('/inicio/',  'InvitadosController@end')->name('end');
Route::get('post',   'InvitadosController@Postss')->name('postinv');
Route::get('/posts/{categorys}', 'InvitadosController@postByCategory')->name('categorias.cate');
//chats
//Route::middleware('auth')->get('/chat', [ChatRoomController::class, 'ind'])->name('chat.index'); //al entrar a la ruta nos redirecciona al login
// Route::get('/chat', 'ChatRoomController@ind')->name('chat.index');
Route::post('/chat', 'ChatRoomController@create')->name('chat.create');
Route::get('chatroom/{chatRoom}', 'ChatRoomController@show')->name('chat_rooms.show');
Route::post('chat/{chatRoom}/send', 'ChatRoomController@send')->name('chat.send');
Route::delete('chat/{chatRoom}', 'ChatRoomController@deleteChatRoom')->name('chat_rooms.delete');
Route::post('chat_rooms/{chatRoom}/leave', 'chatRoomController@leave')->name('chat_rooms.leave');


// Route::get('/chat/enter', [ChatRoomController::class, 'enterChat'])->name('chat.enter');
// Route::get('/chat/sala', 'HomeController@sala')->name('chat.sala');
// Route::post('/chat/send-message', 'ChatRoomController@sendMessage')->name('chat.sendMessage');
// Route::post('/chat/leave/{roomName}', 'ChatRoomController@leave')->name('chat.leave');

// Route::post('/chat/{roomName}/close', 'ChatRoomController@close')->name('chat.close');
// Route::post('/chat/send-message', 'ChatRoomController@sendMessage')->name('chat.send.message');

//-------------------------------------------------------------//
//Rutas para vistas y acciones del perfil de usuarios CAMBIAR PREFIJO a creador
Route::group(['prefix'=>'creadores', 'namespace'=>'Creador', 'middleware'=>'auth'],
   function() {
       // Route::get('user/PerfilEdit', 'UsersController@edit')->name();
        // Route::get('/PerfilEdit', 'UsersController@show')->name('admin.user.PerfilEdit');
        // Route::get('user/PerfilEdit', 'UsersController@edit')->name('admin.user.edit');
        // Route::put('user/PerfilEdit', 'UsersController@update')->name('admin.user.update');
        // Route::post('/PerfilEdit', 'UsersController@nuevo')->name('admin.user.nuevo');
        Route::get('/PerfilEdit', 'UsersController@show')->name('creador.user.PerfilEdit');
        Route::get('user/PerfilEdit', 'UsersController@edit')->name('creador.user.edit');
        Route::put('user/PerfilEdit', 'UsersController@update')->name('creador.user.update');
        Route::post('/PerfilEdit', 'UsersController@nuevo')->name('creador.user.nuevo');
        // Route::get('/lista', 'UsersController@showFollowers')->name('lista');
        Route::get('/perfil','UsersController@perfil')->name('perfil');
        // Route::get('/perfil/{user}/follower/','UsersController@perfil')->name('perfil');
       //Ruta de prueba para seguidores 
       Route::get('/users/available-to-follow', 'UsersController@availableToFollow')->name('available_to_follow');
        Route::post('/follow/{user}', 'UsersController@follow')->name('follow');
        Route::post('/unfollow/{user}', 'UsersController@unfollow')->name('unfollow');
        Route::get('seguidores', 'UsersController@index')->name('seguidores');
        Route::get('/seguido', 'UsersController@listSeguido')->name('seguido');
       
    });

//Rutas para la vista de chat de creador
Route::group(['prefix'=>'crador', 'namespace'=>'Creador'],
    function(){
        Route::get('chat', 'MensajeController@mensaje')->name('crador.chats.mensajes');
    }
);
//----------------------------------------------------------------------//
//Rutas para las vistas y acciones de posts    
Route::group(['prefix'=>'creador', 'namespace'=>'Creador'], 

            function(){
                Route::get('posts', 'PostController@index')->name('creador.posts.hh');
                 Route::get('/Mis-post', 'PostController@misPost')->name('creador.publicacion.posts');
                // Route::get('posts/nuevo', 'PostController@nuevo')->name('creador.posts.nuevo');
                // Route::post('posts', 'PostController@store')->name('creador.posts.store');//guardar los post en la base de datos
                Route::post('/guardar-post', 'PostController@post')->name('creador.posts.nuevo');
                Route::delete('posts/{post}', 'PostController@destroy')->name('creador.posts.destroy');
                Route::get('posts/{post}', 'PostController@edit')->name('creador.posts.edit');
                Route::put('posts/{post}', 'PostController@update')->name('creador.posts.update');
                Route::get('notificaciones', 'PostController@notif')->name('creador.posts.notificacion');
                Route::post('/posts/{post}/like', 'PostController@like')->name('posts.like');
                Route::delete('/posts/{post}/unlike', 'PostController@unlike')->name('posts.unlike');
                Route::post('/posts/{post}/like', 'PostController@like')->name('posts.like');
                Route::get('/obtener-etiquetas', 'PostController@getTagsByCategory')->name('obtener-etiquetas');
                Route::get('markAsRead', function(){
                    auth()->user()->unreadNotifications->markAsRead();
                    return redirect()->back();
                })->name('markAsRead');
                Route::post('notifications/{id}/markAsRead', 'PostController@markNotification')->name('markAsRead');
                

                // Route::delete('/posts/{post}/unlike', [PostController::class, 'unlike'])->name('posts.unlike');
                // Route::get('/post',[PostController::class, 'inicio']);
        // Route::get('posts', 'PostController@index')->name('admin.posts.hh');
        // Route::get('posts/nuevo', 'PostController@nuevo')->name('admin.posts.nuevo');
        // Route::post('posts', 'PostController@store')->name('admin.posts.store');//guardar los post en la base de datos
        // Route::delete('posts/{post}', 'PostController@destroy')->name('admin.posts.destroy');
        // Route::get('posts/{post}', 'PostController@edit')->name('admin.posts.edit');
        // Route::put('posts/{post}', 'PostController@update')->name('admin.posts.update');
        // Route::get('notificaciones', 'PostController@notif')->name('admin.posts.notificacion');
        Route::get('/', 'PostController@ver')->name('ver');
        Route::get('notificaciones', 'PostController@notif')->name('creador.posts.notificacion');
        
        
       

        //Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');

});
Route::get('posts/{post}',          [App\Http\Controllers\Admin\PostController::class, 'edit']);
Route::post('/subcategorias',       [App\Http\Controllers\Admin\PostController::class, 'subcategorias']);
//---------------------------------------------------------------------------------------------------//


//Rutas que controlaran las vistas para los invitados 
//Route::get('/welcomenew', 'WelcomeController@panelinv')->name('panelinv'); //-> Entrada de inicio para Usuarios Invitados
//Route::get('/welcome', 'WelcomeController@out')->name('out'); //-> Salida sin logueo para Usuarios Invitados
Route::get('/invacad', 'InvitadosController@invitacad')->name('invitacad'); //-> Pagina de contenido academico para invitados 
Route::get('/invcult', 'InvitadosController@invitcult')->name('invitcult');
Route::get('/invsocial', 'InvitadosController@invitsociet')->name('invitsociet');
Route::get('/invtec', 'InvitadosController@invitec')->name('invitec');

//Rutas de vistas de contenido general (Espectadores e invitados)
Route::get('/secult', 'HomeController@cultural')->name('cultural');
Route::get('/secacad', 'HomeController@academic')->name('academic');
Route::get('/secsocial', 'HomeController@socialit')->name('socialit');
Route::get('/sectecno', 'HomeController@tecnology')->name('tecnology');
Route::get('/menulive', 'HomeController@lives')->name('lives'); //Ruta que llevara a la Seccion de Lives

Route::get('/tecnologico', [App\Http\Controllers\Admin\PostController::class, 'tecnologico']);

Auth::routes(['verify' => true]);//redireccion de correo
 
//  Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


// //prueba de videochat
//  Route::get('/nose', 'ChatController@index')->name('homes');
//  Route::post('chat', 'ChatController@store')->name('chat.store');
// Route::get('chat/{chat}', 'ChatController@show')->name('chat.show');

/*
app.post("/pusher/auth", (req, res) => {
    const socketId = req.body.socket_id;
    const channel = req.body.channel_name;
    var presenceData = {
        user_id:
        Math.random()
        .toString(36)
        .slice(2) + Date.now()
    };
    const auth = pusher.authenticate(socketId, channel, presenceData);
    res.send(auth);
});
*/

//Rutas para Autenticacion con Google
//-> Para iniciar sesion con Google
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
//-> Cuando retorna la informacion del usuario
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    
    $userExists= User::where('external_id', $user->id)->where('external_auth','google')->first();
    
    if($userExists){
    Auth::login($userExists);

    } else{

        $userNew= User::create([
         'nombre'=> $user->nombre,
         'email'=> $user->email,
         'avatar'=> $user->avatar,
         'external_id'=> $user->id,
         'external_auth'=> 'google',
        ]);

        Auth::login($userNew);
    }
    
     return redirect('/home');
});


//ruta de etiquetas

route::get('Etiqueta', 'App\Http\Controllers\Categoria\CategoriaController@Mostrar');
Route::delete('Etiqueta/{id}','App\Http\Controllers\Categoria\CategoriaController@borrar')->name('creador.categoria.borrar');
route::post('AltaEtiqueta', 'App\Http\Controllers\Categoria\CategoriaController@AltaCategoria')->name('creador.categoria.alta');

// route::post('AltaCategoria', 'App\Http\Controllers\Categoria\CategoriaController@AltaCategoria')->name('admin.categoria.alta');

//ruta de categorias
Route::get('category', 'CategoriesController@index')->name('nuevo');
Route::get('Category', 'CategoriesController@ver')->name('nuevo');
Route::post('NuevoCategory', 'CategoriesController@nuevo')->name('creador.category.new');
// Route::post('NuevoCategory', 'CategoriesController@nuevo')->name('admin.category.new');



// Route::get('/home', function(){
//     $post=Post::withCount('user_id')->get();
//     return view('home',compact('post'));
// });
// Route::get('/home','HomeController@contar')->name('homeCreador');

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas de busqueda
Route::post('/search', 'HomeController@search')->name('search');
Route::post('/searchNormal', 'NormalController@search')->name('searchNormal');

//rutas de seguidores
Route::get('/ista', 'PerfilController@lista');

///Rutas de Administrador

Route::group(['middleware'=>'admin', 'prefix'=> 'admin', 'namespace'=>'Admin'], 
  function(){
        //Route::get('/admin', 'AdminController@ventana')->name('admin.principal.videos');
        Route::get('/admin', 'AdminController@relss')->name('admin.principal.rels');
        Route::get('/usuarios', 'AdminController@usuarios')->name('admin.principal.usuarios');
        Route::get('/post', 'AdminController@posts')->name('admin.principal.posts');
        Route::get('/imagenes', 'AdminController@imagenes')->name('admin.principal.imagenes');
        Route::get('/documents', 'AdminController@document')->name('admin.principal.documents');
        //gardar imagenes de usuarios
        Route::post('/editar', 'AdminController@avatar')->name('admin.principal.avatar');
        //borrar videos
        Route::delete('videos/{id}', 'AdminController@borrar')->name('admin.videos.borrar');
        //borrar posts de usuarios
        Route::delete('posts/{post}', 'AdminController@destroy')->name('admin.posts.destroy');
        //borrar usuarios
        Route::delete('user/{id}/borrar', 'AdminController@borrarUser')->name('admin.user.borrar');
        //desactivar usuario
        Route::delete('user/{id}/desabilitar', 'AdminController@desactivar')->name('admin.user.desactivar');
        //borrar archivos
        Route::delete('documents/{id}', 'AdminController@borrardoc')->name('admin.doc.quitar');
        // borrar imagenes de usuarios
        Route::delete('photo/{photo}}', 'AdminController@destroyI')->name('admin.imagenes.borrar');

});


//sala de chats
 Route::get('/chatss', 'NormalController@chatts')->name('salachatt');
// Route::group(['middleware'=> 'salachat', 'prefix'=>'salachat' 'namespace'=>'Salachat'],
//     function(){
//         Route::get('/sala', 'NormalController@chatts')->name('salachar.');
//     }
// );