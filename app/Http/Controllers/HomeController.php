<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\CarrosselItem;
use App\Models\Usuario;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index()
    {

        $title = 'IntraSAIN';

        $user = [
            'nome_curto' => Usuario::find(1)->nome_curto,
            'unidade' => Usuario::find(1)->rhDados->unidade->sigla
        ];

//        $carrossel = [
//            [
//                'imagem' => 'teste1.png',
//                'titulo' => 'teste1',
//                'tldr' => 'teste tldr',
//                'url' => 'google.com'
//            ],
//            [
//                'imagem' => 'teste2.png',
//                'titulo' => 'teste2',
//                'tldr' => 'teste tldr',
//                'url' => 'google.com'
//            ],
//            [
//                'imagem' => 'teste2.png',
//                'titulo' => 'teste2',
//                'tldr' => 'teste tldr',
//                'url' => 'google.com'
//            ],
//            [
//                'imagem' => 'teste4.png',
//                'titulo' => 'teste4',
//                'tldr' => 'teste tldr',
//                'url' => 'google.com'
//            ],
//            [
//                'imagem' => 'teste5.png',
//                'titulo' => 'teste5',
//                'tldr' => 'teste tldr',
//                'url' => 'google.com'
//            ],
//

        $carrossel = CarrosselItem::getItems()->get();

        $noticias = Artigo::list

//        $noticias = [
//            [
//                'timestamp' => 'xx/xx/xxxx',
//                'timestamprelativo' => 'xx segundos atrás',
//                'coordenacao' => 'DILID',
//                'url' => 'google.com',
//                'titulo' => 'lorem ipsum',
//                'tldr' => 'asdf adsf sdf asdfa sdf'
//            ],
//            [
//                'timestamp' => 'xx/xx/xxxx',
//                'timestamprelativo' => 'xx segundos atrás',
//                'coordenacao' => 'DILID',
//                'url' => 'google.com',
//                'titulo' => 'lorem ipsum',
//                'tldr' => 'asdf adsf sdf asdfa sdf'
//            ],
//        ];

        $pessoas = [
            [
                'nome' => 'Gustavo Ericson',
                'data' => '22/05',
            ],
            [
                'nome' => 'Gustavo Ericson',
                'data' => '22/05',
            ],
        ];

        $paginasEspeciais = [
            [
                'url' => 'google.com',
                'titulo' => 'titulo'
            ],
        ];

        $params = compact('title', 'user', 'carrossel', 'noticias', 'pessoas', 'paginasEspeciais');

        dd($params);

        return view('home.index', compact('carrossel', 'noticias', 'pessoas', 'paginasEspeciais'));
    }

}
