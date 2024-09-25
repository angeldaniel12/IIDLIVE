<?php

namespace App\Http\Controllers\Creador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    //

    public function mensaje(){
        return view ('creador.chats.chat');
    }
}
