@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{!! asset('vendor/slick/slick.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('vendor/slick/slick-theme.css') !!}"/>
@endsection

<?php $carrosselTooOld = $daysSinceLastCarrossel >= 14 ?>

@section('content')
    <main class="home_main">

        @include('common.errors.errors')

        @include('home.components.carrossel')

        <section id="area_noticias" class="container">
            <h1>Notícias</h1>
            <div>
                @foreach($artigos as $artigo)
                    <article>
                        <div class="area_noticias_article_prefix">
                            <span>
                                {{$artigo->created_at->format('d/m/Y')}}
                                ({{$artigo->created_at->diffForHumans()}})
                            </span>
                            <span>
                                {{$artigo->unidade->sigla}}
                            </span>
                        </div>
                        <div class="area_noticias_article_content">
                            <a href="{{$artigo->url()}}">
                                <div>
                                    <img src="{!! asset('icons/' . $artigo->artigo_tipo->internal_code . '.png') !!}">
                                </div>
                                <div>
                                    <h2>{{$artigo->titulo}}</h2>
                                    <p> {{$artigo->tldr}}</p>
                                </div>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="areas_especiais" class="container">
            <section id="section_aniversariantes">
                <h1>Aniversariantes</h1>
                <div id="lista_pessoas">
                    @foreach($pessoas as $pessoa)
                        <article class="@if($pessoa->data_nascimento->isBirthday()) aniversariante_dia @endif">
                            <span>{{$pessoa->nome_curto }}</span>
                            <span>{{$pessoa->data_nascimento->format('d/m')}}</span>
                        </article>
                    @endforeach
                </div>
            </section>
            <section id="section_paginas">
                <h1>Páginas em Destaque</h1>
                <div id="area_paginas">
                    @foreach($paginasEspeciais as $pagina)
                        <article>
                            <a href="{{ $pagina->url() }}">
                                <h3>{{ $pagina->descricao }}</h3>
                                <span>{{ $pagina->tldr }}</span>
                            </a>
                        </article>
                    @endforeach
                </div>
            </section>
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