<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Archivos;
class ListadoController extends Controller
{
    public function ver()
    {
        $titulo = "Mis archivos";
        $query=Archivos::where('user_id',auth()->id())->get();
      
        return view('creador.archivo.vistaArch',['pdfs'=>$query],['title'=>$titulo]);
    } 
    public function quitar()
    {
    }
}
