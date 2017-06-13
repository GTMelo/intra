@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{!! asset('vendor/slick/slick.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('/vendor/slick/slick-theme.css') !!}"/>
@endsection

<?php $carrosselTooOld = $daysSinceLastCarrossel >= 14 ?>

@section('navigation')
@endsection

@section('content')
    <main>
        <section id="area_carrossel" class="area_carrossel">
            @if($carrosselTooOld)
                <div id="carrossel_shrink" class="container carrossel_shrink" data-toggle="tooltip"
                     data-placement="bottom"
                     title="Não há atualizações recentes no carrossel. Clique para exibir mesmo assim">
                    <hr/>
                    <svg class="d-inline-block align-top" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="54"
                         height="41"
                         viewBox="0 0 241 181">
                        <path d="M142 143.9c-21-10.8-37.3-23.4-50-38.6C77.3 87.6 67.2 69.3 61.8 50.8c-0.5-1.7-1.2-4.4-1.8-7.3C52.5 53.3 47.6 64.4 45.4 75.9c4.3 19.3 18 37.8 38.2 44.7l-10.2 30.4c27.3 21.4 65.6 21.7 93.2 0.8 -0.4 0-0.7-0.1-1.1-0.1C158.5 150.7 149 147.5 142 143.9z"/>
                        <path d="M83.6 37c6.5 28 31.8 61 60 78.5 9.3 5.8 24 12.5 34.8 12.5 3.2 0 5.8-0.6 7.7-1.8l3.1-1.9c3-6.1 5.2-12.6 6.4-19.1 -4.3-19.3-18-37.8-38.2-44.7l10.2-30.4c-23.6-18.6-55.7-21.2-81.7-8l-0.1 0.1C83.5 25.5 82.6 33.1 83.6 37z"/>
                        <path d="M67.5 16c0.7-0.3 1.2-0.5 1.6-0.6C25.1 27.4-0.3 74.3 1.7 105.4c2 31.8 22.6 58.1 48.1 73.3l15.5-46.2c-28.1-16.8-42.2-58.9-28.3-87.6C44.3 27.6 61.2 18.4 67.5 16z"/>
                        <path d="M239.3 75.6c-2-31.8-22.6-58.1-48.1-73.3l-15.5 46.3c28.1 16.8 42.2 58.9 28.4 87.6 -7.4 17.2-24.2 26.4-30.6 28.9 -0.7 0.3-1.3 0.5-1.7 0.6C215.9 153.6 241.3 106.7 239.3 75.6z"/>
                    </svg>
                    <hr/>
                </div>
            @endif
            <div class="row hidden" id="carrossel_items">
                <div class="container slick">
                    @foreach($carrossel as $item)
                        <div>
                            <div class="row">
                                <div class="col-md float-left">
                                    <img src="{!! asset($item->imagem->url()) !!}"
                                         alt="placeholder+image">
                                </div>
                                <div class="carrossel_info col-md float-right d-flex flex-column">
                                    <h1>
                                        {{$item->artigo->titulo}}
                                    </h1>
                                    <p class="text-justify flex-1">
                                        {{$item->artigo->tldr}}
                                    </p>
                                    <p class="text-center">
                                        <a class="btn btn-primary" href="{{$item->artigo->url()}}">Leia Mais</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <section id="area_noticias" class="container">
            <h1>Notícias</h1>
            <div class="d-flex flex-wrap justify-content-between">
                @foreach($artigos as $artigo)
                    <article class="d-flex flex-column">
                        <div class="d-flex justify-content-between">
                        <span class="">{{$artigo->created_at->format('d/m/Y')}}
                            ({{$artigo->created_at->diffForHumans()}})</span>
                            <span class="ml-auto">{{$artigo->unidade->sigla}}</span>
                        </div>
                        <a href="{{$artigo->url()}}">
                            <h2>{{$artigo->titulo}}</h2>
                            <p class="font-light"> {{$artigo->tldr}}</p>
                        </a>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="areas_especiais" class="container">
            <div class="row">
                <div class="col" id="area_aniversariantes">
                    <h1>Aniversariantes</h1>
                    <div class="d-flex flex-column" id="lista_aniversariantes">
                        @foreach($pessoas as $pessoa)
                            <div class="d-flex align-items-center justify-content-between @if($pessoa->data_nascimento->isBirthday()) aniversariante_dia @endif">
                                <span>{{$pessoa->usuario->nome_curto }}</span>
                                <span>{{$pessoa->data_nascimento->format('d/m')}}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col">
                    <h1>Páginas em Destaque</h1>
                    <div class="d-flex flex-column" id="paginas_especiais">
                        @foreach($paginasEspeciais as $pagina)
                            <div class="colecao_link">
                                <a href="{{ $pagina->url() }}">{{ $pagina->descricao }}</a><br>
                                <small>{{ $pagina->tldr }}</small>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection

@section('scripts')
    <script src="{!! asset('vendor/slick/slick.min.js') !!}"></script>

    @if($carrosselTooOld)
        <script>
            $(document).ready(function () {

                $("#carrossel_shrink").click(function () {
                    $("#carrossel_shrink").fadeOut(200);
                    setTimeout(function () {
//                        $("#carrossel_shrink").removeClass("d-flex");
                        $("#carrossel_items").fadeIn(500);
                        $(".slick").slick('setPosition');
                    }, 200);
                });
            });
        </script>
    @endif

    @if(!$carrosselTooOld)
        <script>
            $(document).ready(function () {
                $("#carrossel_items").fadeIn(500);
            });
        </script>
    @endif

    <script>
        $(document).ready(function () {
            $(".slick").slick();
        });
    </script>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection