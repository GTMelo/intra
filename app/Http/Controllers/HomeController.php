<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\CarrosselItem;
use App\Models\ObjetoColecao;
use App\Models\Usuario;
use App\Models\UsuarioRH;
use Carbon\Carbon;

class HomeController extends Controller
{

    function index()
    {

        \Carbon\Carbon::setLocale('pt_BR'); // TODO colocar isto em um local mais melhor de bom

        $title = 'IntraSAIN';

        $user = [
            'nome_curto' => Usuario::find(1)->nome_curto,
            'unidade' => Usuario::find(1)->rh->unidade->sigla
                         . '/'
                . Usuario::first()->rh->unidade->descricao,
        ];

        $carrossel = CarrosselItem::getItems()->get();

        $daysSinceLastCarrossel = (new Carbon())->diffInDays($carrossel[0]->published_at);

        $artigos = Artigo::tipo('noticia')->latest()->take(8)->get();

        $pessoas = UsuarioRH::getListaAniversariantes(-7, 15);

        $paginasEspeciais = ObjetoColecao::ofIdentifier('home_paginas_especiais')->objetos(true);

        $params = compact('title', 'user', 'carrossel', 'daysSinceLastCarrossel', 'artigos', 'pessoas', 'paginasEspeciais');

        return view('home.index', $params);
    }

}
