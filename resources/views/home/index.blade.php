@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{!! asset('vendor/slick/slick.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('vendor/slick/slick-theme.css') !!}"/>
@endsection

<?php $carrosselTooOld = $daysSinceLastCarrossel >= 14 ?>

@section('content')
    <main class="home_main">

        @include('common.errors.errors')
        @include('home.components.carrossel')
        @include('home.components.ultimas_noticias')
        @include('home.components.areas_especiais')

    </main>
@endsection

@section('scripts')
    <script src="{!! asset('vendor/slick/slick.min.js') !!}"></script>

    @if($carrosselTooOld)
        <script>
            $(document).ready(function () {
                $("#carrossel_shrink").click(function () {
                    $("#carrossel_shrink").fadeOut(200);
                    setTimeout(function () {
                        $("#carrossel_items").fadeIn(500);
                        $(".slick").slick('setPosition');
                    }, 200);
                });
            });
        </script>
    @endif

    @if(!$carrosselTooOld)
        <script>
            $(document).ready(function () {
                $("#carrossel_items").fadeIn(500);
            });
        </script>
    @endif

    <script>
        $(document).ready(function () {
            $(".slick").slick();
        });
    </script>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection