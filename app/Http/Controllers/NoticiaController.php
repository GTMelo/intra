<?php

namespace App\Http\Controllers;

use App\Models\Artigo;

class NoticiaController extends Controller
{
    function show(Artigo $artigo)
    {

        $params = compact('artigo');
        return view('artigo.show', $params);

    }
}
