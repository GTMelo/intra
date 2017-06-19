<section id="bloco_unidade">
    <div>
        <h1>{{ $artigo->unidade->sigla }}</h1>
        <span>{{ $artigo->unidade->descricao }}</span>
    </div>
    <div>
        <p>{{ $artigo->unidade->tldr }}</p>
    </div>
    <div id="sidebar_botoes">
        <nav><a href="">Contatos</a></nav>
        <nav><a href="">Endereços</a></nav> {{-- TODO listar endereços da área, incluindo salas e baias, numa planta baixa do andar.--}}
        <nav><a href="">Atribuições</a></nav>
        <nav><a href="">Legislação</a></nav>
    </div>
</section>
<section id="bloco_destaques">
    <h1>Destaques</h1>
    @foreach($artigo->unidade->colecao()->objetos(true) as $objeto)
        <nav>
            <a href="{{ $objeto->url() }}">{{ $objeto->descricao }}</a>
        </nav>
    @endforeach
</section>

{{--<div class="unidade_tag">--}}
{{--<h2 class="text-center">{{ $artigo->unidade->sigla }}</h2>--}}
{{--<p class="text-center descricao-unidade">{{$artigo->unidade->descricao}}</p>--}}
{{--</div>--}}
{{--<div class="unidade_tldr">--}}
{{--<span>{{$artigo->unidade->tldr}}</span>--}}
{{--</div>--}}
{{--<br>--}}
{{--<ul class="itemsAfterDescricao">--}}
{{--<li>Contatos</li>--}}
{{--<li>Atribuições</li>--}}
{{--<li>Legislação</li>--}}
{{--<li>Processos</li>--}}
{{--</ul>--}}
{{--<ul class="list-group">--}}
{{--@foreach($artigo->unidade->colecao()->objetos(true) as $item)--}}
{{--<li class="list-group-item">--}}
{{--<a href="{{ $item->url() }}">{{ $item->descricao }}</a>--}}
{{--</li>--}}
{{--@endforeach--}}
{{--</ul>--}}
