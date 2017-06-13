<div class="unidade_tag">
    <h2 class="text-center">{{ $artigo->unidade->sigla }}</h2>
    <p class="text-center descricao-unidade">{{$artigo->unidade->descricao}}</p>
</div>
<div class="unidade_tldr">
    <span>{{$artigo->unidade->tldr}}</span>
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