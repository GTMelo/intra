<?php

namespace App\Http\Controllers;

use App\Models\Artigo;

class PaginaController extends Controller
{
    function show(Artigo $artigo)
    {
        $params = compact('artigo');
        return view('artigo.show', $params);

    }
}
