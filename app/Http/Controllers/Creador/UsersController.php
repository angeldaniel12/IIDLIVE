<?php

namespace App\Http\Controllers\Creador;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\User;

use App\Models\Tag;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        // $followers = User::where('id', '!=', $user->id)
        //               ->where('role', '!=', '0')
        //               ->get();
        // if(!$followers){
        //     return redirect()->back()->with('error','el usuario no existe');
        // }
       $followers=$user->followers;
         return view('seguidores',['user'=>$user],['followers'=>$followers] );
    }
     // $users = User::where('id', '!=', $user->id)
        //              ->where('role', '!=', '0')
        //              ->get();
        // $user=User::find(); 
        // array('user' => Auth::user())   
        
    public function listSeguido()
    {  
        // $followers = $user->followers;
        // $user    = Auth::user(); 
        
        // $followings = $users->following;
        // $following = $user->following;  
        $user = Auth::user();
        if ($user) {
            
            $following = $user->following;
            // Ahora $followers contiene la lista de seguidores del usuario actual
            // y $following contiene la lista de usuarios a los que sigue el usuario actual
        } else {
            return redirect()->back()->with('error','el usuario no existe');
            // El usuario no está autenticado
        }
        return view('seguido',['following'=>$following]);
    }

//     public function availableToFollow()
// {
//     $followingUserIds = Auth::user()->following()->pluck('id');
//     $usersToFollow = User::whereNotIn('id', $followingUserIds)
//                           ->where('id', '!=', Auth::id())
//                           ->get();
//     return view('home', ['usersToFollow'=>$usersToFollow]);
// }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $titulo="Editar perfil";
        return view('creador.user.PerfilEdit', ['title'=>$titulo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $titulo="Editar perfil";
        $user=User::all();
        
        return view('creador.user.PerfilEdit',compact('user'),['title'=>$titulo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function nuevo( Request $request, id $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function update(Request $request,User $user)
    {
      

        $titulo = "Editar perfil";

        // Validamos los campos para la edición de la base de datos
        $rules = [
            'fotos' => 'nullable|image|max:10000|mimes:jpg,jpeg,bmp,png,gif',
            'nombreusuario' => 'nullable|max:50',
            'direccion' => 'nullable|max:50',
            'ciudad' => 'nullable|max:50',
            'pais' => 'nullable|max:50',
            'codigopostal' => 'nullable|max:5',
            'descripcion' => 'nullable|max:50',
            'email' => 'nullable|email', // Asegúrate de que el campo email sea nullable y tenga una validación de email
        ];
    
        $this->validate($request, $rules);
    
        // Obtenemos el usuario actualizado
        $userUpdate = Auth::user();
    
        // Actualizamos el campo email solo si se proporciona en la solicitud
        if ($request->filled('email')) {
            $userUpdate->email = $request->email;
        }
    
        // Actualizamos la imagen del usuario si se proporciona en la solicitud
        if ($request->hasFile('fotos')) {
            $filename = Auth::id() . '_' . time() . '.' . $request->fotos->getClientOriginalName();
            $request->fotos->move(public_path('uploads/avatars'), $filename);
    
            $userUpdate->fotos = $filename;
        }
    
        // Actualizamos los demás campos del usuario
        $userUpdate->nombreusuario = $request->input('nombreusuario');
        $userUpdate->direccion = $request->input('direccion');
        $userUpdate->ciudad = $request->input('ciudad');
        $userUpdate->pais = $request->input('pais');
        $userUpdate->codigopostal = $request->input('codigopostal');
        $userUpdate->descripcion = $request->input('descripcion');
    
        // Guardamos los cambios en la base de datos
        $userUpdate->save();
    
        return redirect()
            ->route('perfil', ['users' => $userUpdate])
            ->with('flash', 'Has actualizado tu perfil');
    
   
}

 public function perfil()
{
    // $user = User::find($id);
    // $followers = $user->followers;
    // $following = $user->following;
    // return view('Perfil',compact('user','followers','following'));
    return view('Perfil');
}

public function follow(User $user)
{
    try {
        // Verificar si el usuario actual ya está siguiendo al usuario dado
        if (!Auth::user()->isFollowing($user)) {
            // Agregar la relación de seguimiento entre el usuario actual y el usuario dado
            Auth::user()->following()->attach($user->id);
            return redirect()->back()->with('success', 'Ahora sigues a ' . $user->name);
        } else {
            return redirect()->back()->with('info', 'Ya estás siguiendo a ' . $user->name);
        }
    } catch (\Exception $e) {
        // Manejar cualquier excepción que pueda ocurrir durante el proceso de seguimiento
        Log::error('Error al seguir al usuario: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Error al seguir al usuario.');
    }
}

 public function unfollow(User $user)
 {
     auth()->user()->unfollow($user);

     return redirect()->back()->with('success', 'Has dejado de seguir a '. $user->name);
 }
 public function followers()
 {
     return $this->belongsTo(User::class,'followers','following_id');
 }

 public function following()
 {
     return $this->belongsTo(User::class,'followers','follower_id');
 }

}