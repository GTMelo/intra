<?php

namespace App\Http\Controllers;

use App\Models\Artigo;

class ArtigoController extends Controller
{

    function index()
    {

    }

    function show(Artigo $artigo)
    {
        $params = compact('artigo');
        return view('artigo.show', $params);
    }

    function create()
    {
        $params = 'teste';
        return view('artigo.create', compact('params'));
    }

    function edit(Artigo $artigo)
    {

    }

}
