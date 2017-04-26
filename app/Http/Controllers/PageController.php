<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function noticia(\App\Models\Objeto $objeto){
        return view('noticia', compact('objeto'));
    }
    
    public function pagina(\App\Models\Objeto $objeto){
        return view('pagina', compact('objeto'));
    }
}
