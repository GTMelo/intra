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
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent scelerisque pulvinar velit,
                            quis iaculis velit suscipit quis. Praesent libero nulla, aliquam id nisi eu, tempus
                            malesuada
                            tortor. Nulla facilisi. Etiam a tempus odio. Integer tristique malesuada diam. Etiam tellus
                            velit, ornare malesuada dapibus ut, laoreet id mauris. Aenean nec scelerisque mauris.</p>

                        <p>Quisque at tincidunt nulla. Nulla auctor nulla est, sit amet viverra orci condimentum dictum.
                            Nullam laoreet eget ipsum non vestibulum. Suspendisse laoreet at purus at iaculis. Aliquam
                            faucibus ornare consectetur. Sed pellentesque pulvinar sem ac posuere. Fusce pharetra risus
                            non
                            lectus aliquam interdum.</p>

                        <p>Ut ex velit, aliquam nec molestie a, volutpat sagittis libero. Donec et ligula quis risus
                            maximus
                            pharetra sed et diam. Nam id tincidunt erat, in consectetur odio. Vestibulum vel ultricies
                            odio.
                            Aenean suscipit lorem ut mi cursus pharetra. Cras scelerisque, lectus ut imperdiet
                            porttitor,
                            leo diam varius nulla, id elementum neque sapien eu risus. Nunc facilisis sapien eget
                            fermentum
                            malesuada. Aenean eget felis eget est mattis cursus. Vivamus quis cursus augue. Pellentesque
                            sodales non nisl sed egestas. Nunc nisl sapien, gravida eget ex ut, venenatis maximus
                            mauris.
                            Sed nec urna et ligula placerat consequat sed aliquam velit. Phasellus purus enim, rhoncus
                            at
                            placerat vitae, sagittis a quam. Fusce sodales tortor vitae tellus scelerisque luctus
                            euismod
                            vel arcu.</p>

                        <p>Nam viverra libero ac dolor mattis, ac aliquet eros tincidunt. Morbi id placerat neque. In
                            semper
                            nibh et sapien tempus, vel convallis dolor ullamcorper. Phasellus et fringilla massa.
                            Maecenas
                            purus nibh, varius at elementum quis, dignissim eget nisl. Ut varius faucibus sem. Nulla
                            facilisi. Nulla suscipit placerat nibh nec cursus. Integer scelerisque suscipit consectetur.
                            Curabitur molestie, ante at pulvinar commodo, sapien felis eleifend mi, in suscipit nisl
                            dolor
                            quis odio. Praesent aliquet ultricies magna nec tempus. Quisque fermentum tortor ac finibus
                            rhoncus. Suspendisse eget cursus enim, a lacinia est.</p>
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