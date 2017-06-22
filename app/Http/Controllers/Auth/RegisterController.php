<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UsuarioRH;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cpf' => 'required|string|max:11',
            'nome_completo' => 'required|string|max:191',
            'nome_curto' => 'required|string|max:191',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'cpf' => $data['cpf'],
            'nome_completo' => $data['nome_completo'],
            'nome_curto' => $data['nome_curto'],
            'last_access' => Carbon::now(),
            'password' => bcrypt($data['password']),
            'ativo' => true,
        ]);

        $usuarioRH = UsuarioRH::create([
            'usuario_id' => $user->id,
            'siape' => $data['siape'],
            'escolaridade_id' => $data['escolaridade'],
            'data_nascimento' => Carbon::createFromFormat('d/m/Y', $data['data_nascimento']),
            'sexo' => $data['sexo']
        ]);

        return $user;
    }
}
