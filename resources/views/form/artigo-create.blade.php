<form id="artigo_create" method="POST" action="/artigos" class="artigo-create">
    {{ csrf_field() }}

    @include('component.form.text-input',[
        'label' => 'Título do artigo',
        'name' => 'titulo',
        'help' => 'Título do artigo'
    ])

    @include('component.form.select-input',[
        'label' => 'Unidade',
        'options' => [
            ['value' => '1', 'label' => 'SAIN'],
            ['value' => '2', 'label' => 'Thing'],
            ['value' => '2', 'label' => 'Thang'],
        ],
        'help' => 'Unidade aonde o artigo será publicado'
    ])

    @include('component.form.date-input',[
        'label' => 'Data de publicação',
        'name' => 'published_at',
        'help' => 'Escolha uma data atual ou futura para publicação'
    ])


    {{--'titulo' => 'required',--}}
    {{--'unidade' => 'required',--}}
    {{--'tldr' => 'required',--}}
    {{--'ativo' => 'required',--}}
    {{--'published_at' => 'required',--}}
    {{--'conteudo' => 'required',--}}
</form>