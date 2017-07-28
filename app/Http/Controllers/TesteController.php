<?php

namespace App\Http\Controllers;

use App\Http\Builders\Form\FormBuilder;
use App\Models\Form;

class TesteController extends Controller
{
    function index(){

        $form = FormBuilder::build(Form::first()->json);

        return view('test.test', compact('form'));

    }

}
