<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\CarrosselItem;
use App\Models\RhDado;
use App\Models\Usuario;
use Carbon\Carbon;

class HomeController extends Controller
{

    function index()
    {

        \Carbon\Carbon::setLocale('pt_BR'); // TODO colocar isto em um local mais melhor de bom
        $hoje = new Carbon();

        $title = 'IntraSAIN';

        $user = [
            'nome_curto' => Usuario::find(1)->nome_curto,
            'unidade' => Usuario::find(1)->rh_dados->unidade->sigla
                         . '/'
                         . Usuario::find(1)->rh_dados->unidade->hierarquia()[0]->sigla,
        ];

        $carrossel = CarrosselItem::getItems()->get();

        $artigos = Artigo::latest()->take(8)->get();

        $pessoas = RhDado::getListaAniversariantes();

        $paginasEspeciais = Artigo::all()->take(5); // TODO Método pra conseguir páginas especiais

        $params = compact('title', 'user', 'carrossel', 'artigos', 'pessoas', 'paginasEspeciais');

        return view('home.index', $params);
    }

}
