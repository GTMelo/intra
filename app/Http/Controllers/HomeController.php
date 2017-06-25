<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\ArtigoTipo;
use App\Models\CarrosselItem;
use App\Models\ObjetoColecao;
use App\Models\User;
use App\Models\UsuarioRH;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    function index()
    {

        \Carbon\Carbon::setLocale('pt_BR'); // TODO colocar isto em um local mais melhor de bom


        if (Auth::check()) {
            $user = Auth::user();
        }

        $title = 'IntraSAIN';

        $carrossel = CarrosselItem::getItems()->get();
        $daysSinceLastCarrossel = (new Carbon())->diffInDays($carrossel[0]->published_at);
        $noticia_id = ArtigoTipo::tipo('noticia')->first()->id;
        $artigos = Artigo::tipo($noticia_id)->latest()->take(8)->get();
        $pessoas = UsuarioRH::getListaAniversariantes(-7, 15);
        $paginasEspeciais = ObjetoColecao::ofIdentifier('home_paginas_especiais')->objetos(true);

        $params = compact('title', 'user', 'carrossel', 'daysSinceLastCarrossel', 'artigos', 'pessoas', 'paginasEspeciais');

        return view('home.index', $params);

    }

}