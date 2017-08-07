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