<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

class RegistrationsController extends Controller
{
    public function create()
    {

        return view('auth.signup');

    }

    public function store(){

        // validar
        $this->validate(request(), [
            'cpf' => 'required',
            'nome_completo' => 'required',
            'nome_curto' => 'required',
            'password' => 'required',
        ]);

        // cirar usuário
        $user = Usuario::create(request([
            'cpf',
            'nome_completo',
            'nome_curto',
            'password'
        ]));

        // logar usuário
        auth()->login($user);


        // redirecionar
        return redirect('/');


    }
}
