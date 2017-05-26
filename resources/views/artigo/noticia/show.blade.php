@extends('layouts.master')

@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="col">
                <span class="inline"> Vocês está em: </span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Página principal</a></li>
                    @foreach($artigo->unidade->hierarquia() as $org)
                        <li class="breadcrumb-item">{{$org->sigla}}</li>
                    @endforeach
                    <li class="breadcrumb-item">{{$artigo->unidade->sigla}}</li>
                    <li class="breadcrumb-item active">{{$artigo->titulo}}</li>
                </ol>
            </div>

        </div>
        <div class="row">

            <div class="col-8 noticia">
                <section class="container">

                    <section class="noticia-header">
                        <div class="margin-0 padding-0 border-bottom-exthin-light">
                            <h1 class="padding-0 margin-0">{{$artigo->titulo}}</h1>
                            <span class="font-faded">{{$artigo->tldr}}</span>
                        </div>
                    </section>

                    <section class="noticia-corpo">
                        {{$artigo->content->conteudo}}
                    </section>

                    <section class="noticia-footer">
                        <div class="text-center">
                            Botões 1 | Botões 2 | Botões 3 | Botões 4
                        </div>
                    </section>

                </section>
            </div>
            <div class="col-4 float-right">
                <div>
                    <h2 class="text-right">{{$artigo->unidade->sigla}}/{{$artigo->unidade->hierarquia()[0]->sigla}}</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Teste 1234</li>
                        <li class="list-group-item">Teste 1234</li>
                        <li class="list-group-item">Teste 1234</li>
                        <li class="list-group-item">Teste 1234</li>
                        <li class="list-group-item">Teste 1234</li>
                    </ul>
                </div>
                <br>
                <div>
                    <h2 class="text-right">Stuff</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Teste 1234</li>
                        <li class="list-group-item">Teste 1234</li>
                        <li class="list-group-item">Teste 1234</li>
                        <li class="list-group-item">Teste 1234</li>
                        <li class="list-group-item">Teste 1234</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection