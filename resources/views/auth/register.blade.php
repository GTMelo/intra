@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{!! asset('vendor/flatpickr/style/flatpickr.min.css') !!}">
@endsection

@section('content')

    <main class="container">
        @include('common.errors.errors')
        <form method="post" action="/register">
            {{ csrf_field() }}
            <fieldset id="register_campos">
                <legend>Dados básicos</legend>
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" placeholder="CPF">
                </div>
                <div class="form-group">
                    <label for="nome_completo">Nome Completo</label>
                    <input type="text" class="form-control" name="nome_completo" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                    <label for="nome_curto">Nome Curto</label>
                    <input type="text" class="form-control" name="nome_curto" placeholder="Nome Curto">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Digite a senha novamente</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Digite a senha novamente">
                </div>
            </fieldset>

            <fieldset>
                <legend>Dados Funcionais</legend>
                <div class="form-group">
                    <label for="siape"> Matrícula Siape </label>
                    <input type="text" class="form-control" id="siape" name="siape" placeholder="Matrícula SIAPE. Deixe em branco caso não possua SIAPE">
                </div>
                <div class="form-group">
                    <label for="escolaridade"> Escolaridade </label>
                    <select name="escolaridade" id="escolaridade" class="form-control">
                        @foreach(\App\Models\Escolaridade::all() as $item)
                            <option value="{{ $item->id }}">{{ $item->descricao }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="data_nascimento"> Data de Nascimento </label>
                    <input id="data_nascimento" name="data_nascimento" type="datetime" class="datepicker form-control"
                           value="{{ (Carbon\Carbon::now())->format('Y-m-d') }}" >
                </div>
                <div class="form-group">
                    <label for="sexo"> Sexo </label>
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="m">Masculino</option>
                        <option value="f">Feminino</option>
                    </select>
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
            </fieldset>
        </form>
    </main>

@endsection

@section('scripts')
    <script src="{!! asset('vendor/flatpickr/flatpickr.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $(".datepicker").flatpickr({
                dateFormat: "d/m/Y",
                defaultDate: ["{{ (Carbon\Carbon::now())->format('d/m/Y') }}"],
            });
        });
    </script>
@endsection

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
