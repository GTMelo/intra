@extends('master')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="{!! URL::asset('lib/slick/slick.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! URL::asset('lib/slick/slick-theme.css') !!}"/>
@endsection

@section('scripts')

    @parent

    <script>
        $(document).ready(function () {

            $("#carrossel_shrink").click(function () {
                $("#carrossel_shrink").fadeOut(200);
                setTimeout(function () {
                    $("#carrossel_shrink").removeClass("d-flex");
                    $("#carrossel_items").fadeIn(500);
                    $(".slick").slick('setPosition');
                }, 200);
            });
        });
    </script>

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