@extends('layouts.master')

@section('content')
    <main class="container ">
        <div id="body_artigo">
            <section id="area_artigo">
                <header>
                    <h1>{{ $artigo->titulo }}</h1>
                    <div id="article_metadata">
                        <span>Publicado em: {{ $artigo->created_at->format('d/m/Y H:i')}}</span>
                        <span>Por: {{ $artigo->autor->nome() }}</span>
                    </div>
                </header>
                <article>
                    {{ $artigo->contents->conteudo }}
                </article>
                {{--<section id="article_footer">--}}
                {{--TODO área com funções para páginas--}}
                {{--</section>--}}
            </section>
            <aside id="sidebar">
                @include('artigo.sidebar')
            </aside>
        </div>
    </main>
@endsection