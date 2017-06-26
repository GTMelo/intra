@extends('layouts.master')

@section('content')
    <main>

        @include('common.errors.errors')

        <form method="POST" action="/login">
            {{ csrf_field() }}
            <input type="text" name="cpf" placeholder="CPF">
            <input type="password" name="password" placeholder="Senha">
            <input type="submit" value="Entrar">
        </form>
    </main>
@endsection