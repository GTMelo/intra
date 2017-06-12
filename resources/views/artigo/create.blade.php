@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{!! asset('vendor/flatpickr/style/flatpickr.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendor/summernote/summernote.css') !!}">
@endsection

@section('content')
    <main class="container">
        <div class="row">
            <form id="novo_artigo" method="post" action="/artigos">
                <section class="col-lg-8 float-left">
                    {{ csrf_field() }}
                    <nav id="artigo_header">
                        <input class="fillable" type="text" placeholder="Digite o título do artigo" name="titulo">
                        <div id="artigo_header_metadata">
                            <span>Publicar em: <input type="datetime"
                                                      value="{{ (new \Carbon\Carbon())->format('Y-m-d') }}"
                                                      name="published_at" class="datepicker fillable"></span>
                            {{--<span>Por: FIXED: usuário atual</span>--}}
                            <span>Em: FIXED/INPUT: Unidade do usuário</span>
                        </div>
                        <input type="text" class="fillable" name="tldr">
                        <input type="hidden" name="ativo" value="1">
                        <input type="hidden" name="contents" value="">
                    </nav>

                    <div id="artigo_body">
                        <div id="summernote"></div>
                        {{--<textarea name="Digite o texto do artigo" width="500px"></textarea>--}}
                    </div>

                    <nav id="artigo_footer">

                    </nav>
                </section>

                <aside class="col-lg-4 float-right">
                    <div class="text-center">
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </div>
                    {{--@include('artigo.sidebar')--}}
                </aside>
            </form>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{!! asset('vendor/flatpickr/flatpickr.js') !!}"></script>
    <script src="{!! asset('vendor/summernote/summernote.min.js') !!}"></script>

    <script>
        $(document).ready(function () {
            $(".datepicker").flatpickr({
                enableTime: true,
                time_24hr: true,
                dateFormat: "d/m/Y H:i"
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 550,
                callbacks: {
                    onKeyup: function() {
                        $("input[name=contents]").val($('#summernote').summernote('code'));
                    }
                }
            });
        });
    </script>
@endsection