<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\CarrosselItem;
use App\Models\Usuario;

class HomeController extends Controller
{

    function index()
    {

        $title = 'IntraSAIN';

        $user = [
            'nome_curto' => Usuario::find(1)->nome_curto,
            'unidade' => Usuario::find(1)->rh_dados->unidade->sigla,
        ];

        $carrossel = CarrosselItem::getItems()->get();

        $artigos = Artigo::latest()->take(8);

        $pessoas = Usuario::latest()->take(5); // TODO Método pra conseguir upcoming aniversários

        $paginasEspeciais = Artigo::all()->take(5); // TODO Método pra conseguir páginas especiais

        $params = compact('title', 'user', 'carrossel', 'artigos', 'pessoas', 'paginasEspeciais');

        return view('home.index', $params);
    }

}
