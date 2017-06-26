@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{!! asset('vendor/flatpickr/style/flatpickr.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/summernote/summernote.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/artigos.css') !!}">
@endsection

@section('content')
    <main class="container">

        @include('common.errors.errors')

        <h1>Publicar um novo artigo</h1>
        <form id="novo_artigo" method="post" action="/artigos">

            {{ csrf_field() }}
            <input type="hidden" name="autor_id" value="{!! Auth::id() !!}">

            <fieldset>

                <div class="form-group">
                    <input type="submit" value="Salvar" class="btn btn-primary">
                </div>

            </fieldset>

            <fieldset>

                <legend>Dados básicos</legend>

                <input type="hidden" name="ativo" value="1">

                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input required id="titulo" name="titulo" type="text" class="form-control"
                           placeholder="Digite o título do artigo">
                </div>

                <div class="form-group">
                    <label for="tldr">Resumo</label>
                    <input required id="tldr" name="tldr" type="text" class="form-control"
                           placeholder="Digite um breve resumo para o artigo (até 140 caracteres)">
                </div>

                <div class="form-group">
                    <label for="published_at">Data de publicação</label>
                    <input id="published_at" name="published_at" type="datetime" class="datepicker form-control"
                           value="{{ (Carbon\Carbon::now())->format('Y-m-d H:i') }}">
                </div>

                <div class="form-group">
                    <label for="unidade">Unidade</label>
                    <select required id="unidade" name="unidade" class="form-control">
                        @foreach(\App\Models\Unidade::all() as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->sigla }}</option>
                        @endforeach
                    </select>
                </div>

            </fieldset>

            <fieldset>

                <legend>Conteúdo</legend>

                <input type="hidden" name="conteudo" value="">
                <div id="artigo_body">
                    <div id="summernote"></div>
                </div>

            </fieldset>

        </form>
        {{--<div class="row">--}}
        {{--<form id="novo_artigo" method="post" action="/artigos">--}}
        {{--<section class="col-lg-8 float-left">--}}
        {{--{{ csrf_field() }}--}}
        {{--<nav id="artigo_header">--}}
        {{--<input class="fillable" type="text" placeholder="Digite o título do artigo" name="titulo">--}}
        {{--<div id="artigo_header_metadata">--}}
        {{--<span>Publicar em: <input type="datetime"--}}
        {{--value="{{ (new \Carbon\Carbon())->format('Y-m-d') }}"--}}
        {{--name="published_at" class="datepicker fillable"></span>--}}
        {{--<span>Por: FIXED: usuário atual</span>--}}
        {{--<span>Em: FIXED/INPUT: Unidade do usuário</span>--}}
        {{--</div>--}}
        {{--<input type="text" class="fillable" name="tldr">--}}
        {{--<input type="hidden" name="ativo" value="1">--}}
        {{--<input type="hidden" name="contents" value="">--}}
        {{--</nav>--}}

        {{--<div id="artigo_body">--}}
        {{--<div id="summernote"></div>--}}
        {{--<textarea name="Digite o texto do artigo" width="500px"></textarea>--}}
        {{--</div>--}}

        {{--<nav id="artigo_footer">--}}

        {{--</nav>--}}
        {{--</section>--}}

        {{--<aside class="col-lg-4 float-right">--}}
        {{--<div class="text-center">--}}
        {{--<input type="submit" value="Salvar" class="btn btn-primary">--}}
        {{--</div>--}}
        {{--@include('artigo.sidebar')--}}
        {{--</aside>--}}
        {{--</form>--}}
        {{--</div>--}}
    </main>
@endsection

@section('scripts')
    <script src="{!! asset('vendor/flatpickr/flatpickr.js') !!}"></script>
    <script src="{!! asset('vendor/summernote/summernote.min.js') !!}"></script>

    <script>
        $(document).ready(function () {
            $(".datepicker").flatpickr({
                minDate: "today",
                enableTime: true,
                minuteIncrement: 15,
                time_24hr: true,
                dateFormat: "d/m/Y H:i",
                defaultDate: ["{{ (Carbon\Carbon::now())->format('d/m/Y H:i') }}"],
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 550,
                callbacks: {
                    onKeyup: function () {
                        $("input[name=conteudo]").val($('#summernote').summernote('code'));
                    }
                }
            });
        });
    </script>
@endsection