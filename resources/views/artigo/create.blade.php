@extends('layouts.master')

@section('content')
    <main class="container">
        <div class="row">
            <section class="col-lg-8 float-left">
                <form id="novo_artigo">
                    <nav id="artigo_header">
                        <input type="text" placeholder="Digite o título do artigo" name="titulo">
                        <div id="artigo_header_metadata">
                            <span>Publicado em: INPUT: Data de publicação</span>
                            <span>Por: FIXED: usuário atual</span>
                            <span>Em: FIXED/INPUT: Unidade</span>
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
                </form>
            </section>

            <aside class="col-lg-4 float-right">
                {{--@include('artigo.sidebar')--}}
            </aside>
        </div>
    </main>
@endsection