@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{!! asset('vendor/flatpickr/style/flatpickr.min.css') !!}">
@endsection

@section('content')
    <main class="container">
        <h1>Criar uma conta no IntraSAIN</h1>
        <div class="formteste">
            <form method="post" action="/registrar">
                {{ csrf_field() }}

                <fieldset>
                    <legend>Dados Básicos</legend>
                    <div>
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" placeholder="Informe o CPF" required>
                    </div>
                    <div>
                        <label for="nome_completo">Nome</label>
                        <input type="text" name="nome_completo" placeholder="Nome completo" required>
                        <input type="text" name="nome_curto" placeholder="Nome curto" required>
                    </div>
                    <div>
                        <label for="password">Senha</label>
                        <input type="password" name="password" placeholder="digite a senha" required>
                        <input type="password" name="password_confirmation" placeholder="confirme a senha" required>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Dados pessoais</legend>
                    <div>
                        <label for="siape">Matrícula SIAPE</label>
                        <input type="text" name="siape"
                               placeholder="Digite a matrícula siape. Apenas números. Deixe em banco caso não possua siape">
                    </div>
                    <div>
                        <label for="escolaridade_id">Escolaridade</label>
                        <select name="escolaridade">
                            @foreach(\App\Models\Escolaridade::all() as $item)
                                <option value="{{ $item->id }}"> {{ $item->descricao }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="data_nascimento">Data de nascimento</label>
                        <input type="datetime" name="data_nascimento" class="datepicker"
                               placeholder="Data de nascimento">
                    </div>
                    <div>
                        <label for="sexo">Sexo</label>
                        <select name="sexo">
                            <option value="m">Masculino</option>
                            <option value="f">Feminino</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <input type="submit" value="Enviar">
                </fieldset>

            </form>
        </div>
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