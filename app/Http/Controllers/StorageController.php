<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public function shows()
    {
        return view('admin.archivo.files');
    }
    //private $disk="public";

    /*public function form(){
        return view('files');
        /*$files=[];
        foreach(Storage::disk($this->disk)->files()as$file){
            $name=str_replace("$this->disk/", "",$file);
            //$picture="";
            //$type=Storage::disk($this->disk)->mimeType($name);
           
        }
        return view('files', ["files"=>$files]);
    }*/

    public function guardar(Request $request){
        
        dd($request->all());
        if($request->hasFile("urlpdf")){
            $name=$request->input('nombre');
            $file=$request->file("urlpdf");
            
            $nombre = $name." pdf_".time().".".$file->guessExtension();

            $ruta =  storage_path("app".$nombre);

            if($file->guessExtension()=="pdf"){
                copy($file, $ruta);
                return back()->with('flash', 'se guardo con exito');
            }else{
                return back()->with('flash', 'no es archivo PDF');
            }
            

      
        }
       
    }
    
}
