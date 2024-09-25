<?php

namespace App\Http\Controllers\Creador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Video;
use App\Models\VideoComment;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ReelController extends Controller
{
    public function ver()
    {
       $tituloPagina="Mis reels";
       $v=Video::where('user_id', auth()->id())->get();
       return view('creador.archivo.videos',compact(['v']),['title'=>$tituloPagina]);
    }
     public function miReels ()
    {
        $tituloPagina="Mis publicaciones";
        $vid=Video::where('user_id', auth()->id())->get();
       return view('creador.publicacion.misPublicacion',compact(['vid']),['title'=>$tituloPagina]);
    }
 /*public function publicViewReel($id) {
        $video = Video::findOrFail($id);
        return view('public.publicReels', compact('video'));
    }
    */
    public function videoss(Request $request){
    $this->validate($request, [
        'video' => [
            'required',
            'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            function ($attribute, $value, $fail) {
                // Validar si el tipo MIME del archivo no está permitido
                $allowedMimeTypes = [
                    'video/x-ms-asf',
                    'video/x-flv',
                    'video/mp4',
                    'video/MP2T',
                    'video/3gpp',
                    'video/quicktime',
                    'video/x-msvideo',
                    'video/x-ms-wmv',
                    'video/avi',
                ];

                if (!in_array($value->getMimeType(), $allowedMimeTypes)) {
                    $fail('El formato del archivo de video no es compatible. Los formatos permitidos son: ASF, FLV, MP4, MP2T, 3GP, QuickTime, AVI, WMV.');
                }
            }
        ],
        'descripcion' => 'nullable|max:100000',
    ]);

    $nombre = $request->file('video');

    // Reemplaza caracteres no deseados con guiones
    $nombreVideo = preg_replace('/[^\p{L}\p{N}\s.]/u', '-', $nombre->getClientOriginalName());
    // Reemplaza espacios con guiones
    $nombreVideo = str_replace(' ', '-', $nombreVideo);
    $nombre->move('rels', $nombreVideo);

    $video = new Video();
    $video->descripcion = $request->descripcion ?? ''; // Establecer descripción vacía si no se proporciona
    $video->nombre = $nombreVideo;
    $video->user_id = auth()->user()->id;
    $video->save();

    return redirect()->route('home')->with('video', 'El reel se ha subido correctamente.');
}

    
/*    public function videoss(Request $request){
        $this->validate($request, [
            'video' => [
                'required',
                'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
                function ($attribute, $value, $fail) {
                    // Validar si el tipo MIME del archivo no está permitido
                    $allowedMimeTypes = [
                        'video/x-ms-asf',
                        'video/x-flv',
                        'video/mp4',
                        'video/MP2T',
                        'video/3gpp',
                        'video/quicktime',
                        'video/x-msvideo',
                        'video/x-ms-wmv',
                        'video/avi',
                    ];
    
                    if (!in_array($value->getMimeType(), $allowedMimeTypes)) {
                        $fail('El formato del archivo de video no es compatible. Los formatos permitidos son: ASF, FLV, MP4, MP2T, 3GP, QuickTime, AVI, WMV.');
                    }
                }
            ],
            'descripcion' => 'required|max:100000',
        ]);
        $nombre = $request->file('video');
         // Reemplaza caracteres no deseados con guiones
$nombreVideo = preg_replace('/[^\p{L}\p{N}\s.]/u', '-', $nombre->getClientOriginalName());
// Reemplaza espacios con guiones
$nombreVideo = str_replace(' ', '-', $nombreVideo);
$nombre->move('rels', $nombreVideo);
     
            $video=new Video();
            $video->descripcion=$request->descripcion;
            $video->nombre=$nombreVideo;
            $video->user_id=auth()->user()->id;
            $video->save();
          return redirect()->route('home')->with('video', 'El reel se ha subido correctamente.');
    }*/

    public function quitar($id)
    {
        $rels = Video::find($id);
        Storage::disk('public')->delete($rels->nombre); 
        $rels-> delete();
        return redirect()
            ->route('creador.archivo.ver');
    }

    public function like(Request $request,Video $video)
{
    $selectedLikes = $request->input('likes');

    // Verificar si el usuario ya ha dado like a este video
    $existingLike = Like::where('user_id', auth()->id())
                        ->where('likeable_id', $video->id)
                        ->where('likeable_type', Video::class)
                        ->first();

    if ($existingLike) {
        // Si ya existe un like para este video, actualizar el campo 'count'
        $existingLike->count = min($existingLike->count + $selectedLikes, 5); // Limitar a un máximo de 5 likes
        $existingLike->save();
    } else {
        // Si no existe un like para este video, crear uno nuevo
        $like = new Like();
        $like->user_id = auth()->id();
        $like->likeable_id = $video->id;
        $like->likeable_type = Video::class;
        $like->count = min($selectedLikes, 5); // Limitar a un máximo de 5 likes
        $like->save();
    }

    // Redireccionar de vuelta al video
    return redirect()->route('home', $video->id)->with('success', 'Likes guardados exitosamente.');
}
        // $selectedLikes = $request->input('like-range');

        // // Verificar si el usuario ya dio like al video
        // $like = Like::where('user_id', Auth::id())
        //             ->where('likeable_type', 'App\Models\Video')
        //             ->where('likeable_id', $video->id)
        //             ->first();

        // // Verificar si el usuario puede dar la cantidad de likes seleccionada
        // if (!$like && $selectedLikes > 0 && $selectedLikes <= 5) {
        //     // Crear un nuevo like
        //     $like = new Like();
        //     $like->user_id = Auth::id();
        //     $video->likes()->save($like);
        // }

        // // Redireccionar de vuelta al video
        // return redirect()->back();
    
  
        // $user_id = Auth::id(); // Obtener el ID del usuario autenticado

        // $selectedLikes = (int) $request->input('like-range'); // Cantidad de likes seleccionados
    
        // // Verificar si el usuario ya ha dado like al video
        // $existingLike = Like::where('user_id', $user_id)
        //                     ->where('video_id', $video->id)
        //                     ->first();
    
        // if ($existingLike) {
        //     // Si ya ha dado like, actualizar la cantidad de likes sumándole la cantidad seleccionada
        //     $existingLike->count += $selectedLikes;
        //     $existingLike->save();
        //     return redirect()->back()->with('success', 'Tus likes se han actualizado correctamente.');
        // } else {
        //     // Si no ha dado like, crear un nuevo like con el ID del usuario y la cantidad seleccionada
        //     Like::create([
        //         'video_id' => $video->id,
        //         'user_id' => $user_id,
        //         'count' => $selectedLikes
        //     ]);
        //     return redirect()->back()->with('success', 'Gracias por tus likes.');
        // }
  
    //     $userId = Auth::id();

    //     // Verificar si el usuario ya ha dado like al video
    //     $existingLike = Like::where('user_id', $userId)
    //                           ->where('video_id', $video->id)
    //                         ->first();
    
    //     if ($existingLike) {
    //         // Si ya ha dado like, actualizar la cantidad de likes
    //         $existingLike->count = $request->input('like-range');
    //         $existingLike->save();
    //         return redirect()->back()->with('success', 'Tu like se ha actualizado correctamente.');
    //     } else {
    //         // Si no ha dado like, crear un nuevo like
    //         Like::create([
    //             'video_id' => $video->id,
    //             'user_id' => $userId,
    //             'count' => $request->input('like-range')
    //         ]);
    //         return redirect()->back()->with('success', 'Gracias por tu like.');
    //     }
    // }
    //     $userId = Auth::id();

    // // Contar la cantidad de likes que el usuario ya ha dado al video
    // $userLikesCount = Like::where('user_id', $userId)
    //                       ->where('video_id', $video->id)
    //                       ->count();

    // // Verificar si el usuario ya ha dado 5 likes al video
    // if ($userLikesCount >= 5) {
    //     return redirect()->back()->with('error', 'Solo puedes dar hasta 5 likes a este video.');
    // }
    //     // Verificar si el usuario ya ha dado like al video
    //     $existingLike = Like::where('video_id', $video->id)
    //                         ->where('user_id', $userId)
    //                         ->first();

    //     if ($existingLike) {
    //         // Si ya ha dado like, eliminar el like
    //         $existingLike->delete();
    //         return redirect()->back()->with('success', 'Has dado unlike al video.');
    //     } else {
    //         // Si no ha dado like, crear un nuevo like
    //         $like = new Like();
    //         $like->video_id = $video->id;
    //         $like->user_id = $userId;
    //         $like->save();
    //         return redirect()->back()->with('success', 'Has dado like al video.');
    //     }
    // }

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
    public function show($id)
    {
        $video = Video::findOrFail($id);
        $comments = $video->videocomments()->with('user')->get(); // Cargar los comentarios con el usuario asociado
        $videoUrl = route('videos.show', $video->id);   
    
        return view('home', compact('video', 'comments','videoUrl'));
    }
    
}