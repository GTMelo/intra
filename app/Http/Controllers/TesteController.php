<?php

namespace App\Http\Controllers;

use App\Http\Builders\Form\FormBuilder;
use App\Models\Form;

class TesteController extends Controller
{
    function index(){

        return view('test.test');

    }

}
