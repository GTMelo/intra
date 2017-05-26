<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    function show(Artigo $artigo)
    {

        $params = compact('artigo');

        return view('artigo.noticia.show', $params);
    }
}
