<?php

namespace App\Http\Controllers;

use App\Models\Artigo;

class ArtigoController extends Controller
{

    function index()
    {
        return wryyyy();
    }

    function create(){
        return view('artigo.create');
    }

    function show(Artigo $artigo)
    {
        $params = compact('artigo');
        return view('artigo.show', $params);
    }
}
