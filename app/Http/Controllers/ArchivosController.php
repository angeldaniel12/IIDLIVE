<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archivos;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
USE Illuminate\Support\Str;

class ArchivosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index()
    {
        // $pdfs=Archivos::where('user_id', auth()->user()->id);
        // return view('admin.archivo.vistaArch', compact('pdfs'));
    }
    
    //Funcion para la carga de archivos en la base de datos
    public function insertar(Request $request)
    {

        // $request->validate([
        //     'nombres' => 'required|string|max:255',
        //     'pdf' => 'required|file|mimes:pdf|max:2048',
        // ]);
        //dd($request);
        try{
            DB::beginTransaction();
            $reg=new Archivos;
            $reg->user_id = auth()->user()->id;
            $reg->nombres=$request->get('nombre');
            
            if($request->hasFile('pdf')){
                $archivo=$request->file('pdf');
                $archivo->move('archivos',$archivo->getClientOriginalName());
                $reg->documento=$archivo->getClientOriginalName();
            }
            $reg->save();
            DB::commit();
        }catch(Exception $e){
            DB::rollback();

        }
        
        return redirect()->route('creador.archivo.vistaArch');

    }
    //funcion para la eliminacion de archivos
    public function destroy($id)
 {
        $archi = Archivos::find($id);
        Storage::disk('public')->delete($archi->nombres); 
        $archi-> delete();
        
        return  redirect()->route('creador.archivo.vistaArch');
        
    }

    public function intserRels( User $user)
    {
        

    }
  
}
