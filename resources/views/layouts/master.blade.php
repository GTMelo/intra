<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"/> -->

    @section('stylesheets')
        <link rel="stylesheet" href="{!! URL::asset('lib/bootstrap-4.0.0-alpha6/css/bootstrap.min.css') !!}"/>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}"/>
    @endsection


    <title>
        @section('title', 'IntraSAIN')
    </title>

</head>
<body>
<header>
    @include('inc.header')
</header>

<main>
    @yield('content')
</main>

<footer>
    @include('inc.footer')
</footer>

@section('scripts')
    <script src="{!! URL::asset('lib/jquery/jquery-3.2.0.min.js') !!}"></script>
    <script src="{!! URL::asset('lib/tether/js/tether.min.js') !!}"></script>
    <script src="{!! URL::asset('lib/bootstrap-4.0.0-alpha6/js/bootstrap.min.js')!!}"></script>
    <script src="{!! URL::asset('lib/slick/slick.min.js')!!}"></script>
@endsection

</body>
</html>