@extends('layouts.master')

@section('content')
        <main class="container">
            <div class="row">
                <section class="col-lg-8 float-left">
                    <nav id="artigo_header">
                        <h1>{{$artigo->titulo}}</h1>
                        <div id="artigo_header_metadata">
                            <span>Publicado em: {{$artigo->created_at->format('d/m/Y')}}</span>
                            <span>Por: {{ $artigo->autor->nome_completo }}</span>
                            <span>Em: {{ $artigo->unidade->sigla }}</span>
                        </div>
                    </nav>

                    <article id="artigo_body">
                        <p>Paragrafo 1</p>
                        <p>Paragrafo 2</p>
                        <p>Paragrafo 3</p>
                        <p>Paragrafo 4</p>
                    </article>

                    <nav id="artigo_footer">
                        <div class="text-center">
                            Botões 1 | Botões 2 | Botões 3 | Botões 4
                        </div>
                    </nav>
                </section>

                <aside class="col-lg-4 float-right">
                    @include('artigo.sidebar')
                </aside>
            </div>
        </main>
@endsection