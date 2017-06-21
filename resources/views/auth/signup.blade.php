@extends('layouts.master')

@section('navigation')
@endsection

@section('content')
    <main class="container">
        <h1>Criar uma conta no IntraSAIN</h1>
        <div class="formteste">
            <form method="post" action="/registrar">
                {{ csrf_field() }}
                <input type="text" name="cpf" placeholder="Informe o CPF">
                <input type="text" name="nome_completo" placeholder="Nome completo">
                <input type="text" name="nome_curto" placeholder="Nome curto">
                <input type="password" name="password" placeholder="digite a senha">
                <input type="password" name="password_confirmation" placeholder="confirme a senha">
                <input type="submit" value="Enviar">
            </form>
        </div>
    </main>
@endsection

@section('scripts')
@endsection