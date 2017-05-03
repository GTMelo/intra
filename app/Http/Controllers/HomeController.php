<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index()
    {

        $params = array(
            'title' => 'IntraSAIN',
            'user' => UserDatum::find(1)
        );

        $carrossel = [
            [
                'imagem' => 'teste1.png',
                'titulo' => 'teste1',
                'tldr' => 'teste tldr',
                'url' => 'google.com'
            ],
            [
                'imagem' => 'teste2.png',
                'titulo' => 'teste2',
                'tldr' => 'teste tldr',
                'url' => 'google.com'
            ],
            [
                'imagem' => 'teste2.png',
                'titulo' => 'teste2',
                'tldr' => 'teste tldr',
                'url' => 'google.com'
            ],
            [
                'imagem' => 'teste4.png',
                'titulo' => 'teste4',
                'tldr' => 'teste tldr',
                'url' => 'google.com'
            ],
            [
                'imagem' => 'teste5.png',
                'titulo' => 'teste5',
                'tldr' => 'teste tldr',
                'url' => 'google.com'
            ],
        ];

        $noticias = [
            [
                'timestamp' => 'xx/xx/xxxx',
                'timestamprelativo' => 'xx segundos atrás',
                'coordenacao' => 'DILID',
                'url' => 'google.com',
                'titulo' => 'lorem ipsum',
                'tldr' => 'asdf adsf sdf asdfa sdf'
            ],
            [
                'timestamp' => 'xx/xx/xxxx',
                'timestamprelativo' => 'xx segundos atrás',
                'coordenacao' => 'DILID',
                'url' => 'google.com',
                'titulo' => 'lorem ipsum',
                'tldr' => 'asdf adsf sdf asdfa sdf'
            ],
        ];

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

        return view('home.index', compact('carrossel', 'noticias', 'pessoas', 'paginasEspeciais'));
    }

}
