<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDatum;

class HomeController extends Controller
{

    function index()
    {

        $params = array(
            'title' => 'IntraSAIN',
            'user' => UserDatum::find(1)
        );

        $carrossel  = [
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

        return view('home.index', compact('carrossel'));
    }

}
