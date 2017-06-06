<?php

namespace App\Http\Controllers;

use App\Models\Unidade;

class UnidadeController extends Controller
{

    function index(){
        return wryyyy();
    }

    function show(Unidade $unidade){
        return $unidade;
    }

}
