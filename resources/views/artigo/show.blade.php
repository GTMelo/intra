@extends('layouts.master')

@section('content')
    <main class="container">
        <br>
        <div class="row">
            <div class="col">
                <span class="inline"> Vocês está em: </span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Página principal</a></li>
                    <li class="breadcrumb-item"><a
                                href="/{{$artigo->artigo_tipo->internal_code}}">{{$artigo->artigo_tipo->human_code}}</a>
                    </li>
                    <li class="breadcrumb-item active">{{$artigo->titulo}}</li>
                </ol>
            </div>

        </div>
        <div class="row">

            <section class="col-8 noticia">
                <section class="container">

                    <section class="noticia-header">
                        <div class="margin-0 padding-0 border-bottom-exthin-light">
                            <h1 class="padding-0 margin-0">{{$artigo->titulo}}</h1>
                            <span class="font-faded">{{$artigo->tldr}}</span>
                        </div>
                    </section>

                    <section class="noticia-corpo">
                        {!! \GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($artigo->content->conteudo) !!}
                    </section>

                    <section class="noticia-footer">
                        <div class="text-center">
                            Botões 1 &#8226 Botões 2 &#8226 Botões 3 &#8226 Botões 4
                        </div>
                    </section>

                </section>
            </section>
            <section class="col-4 float-right">
                <div>
                    <div class="unidade_tag">
                        <h2 class="text-center">{{ $artigo->unidade->sigla }}</h2>
                        <p class="text-center descricao-unidade">{{$artigo->unidade->descricao}}</p>
                    </div>
                    <div class="unidade_tldr">
                        <span>
                            {{$artigo->unidade->tldr}}
                        </span>
                    </div>
                    <br>
                    <ul class="itemsAfterDescricao">
                        <li>Contatos</li>
                        <li>Atribuições</li>
                        <li>Legislação</li>
                        <li>Processos</li>
                    </ul>
                    <ul class="list-group">
                        @foreach($artigo->unidade->colecao()->objetos(true) as $item)
                            <li class="list-group-item">
                                <a href="{{ $item->url() }}">{{ $item->descricao }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </main>
@endsection