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

        $title = 'IntraSAIN';

        $user = [
            'nome_curto' => Usuario::find(1)->nome_curto,
            'unidade' => Usuario::find(1)->rh_dados->unidade->sigla
                         . '/'
                         . Usuario::find(1)->rh_dados->unidade->hierarquia()[0]->sigla,
        ];

        $carrossel = CarrosselItem::getItems()->get();

        $daysSinceLastCarrossel = (new Carbon())->diffInDays($carrossel[0]->published_at);

        $artigos = Artigo::latest()->take(8)->get();

        $pessoas = RhDado::getListaAniversariantes(-7, 15); // TODO mover método pra um helper e tornar mais genérico (tipo isDayAndMonthWithinRange

        $paginasEspeciais = Artigo::all()->take(5); // TODO Método pra conseguir páginas especiais

        $params = compact('title', 'user', 'carrossel', 'daysSinceLastCarrossel', 'artigos', 'pessoas', 'paginasEspeciais');

        return view('home.index', $params);
    }

}
