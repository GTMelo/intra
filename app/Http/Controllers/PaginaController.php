<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    function show(Artigo $artigo)
    {
        return $artigo;
    }
}
