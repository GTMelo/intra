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