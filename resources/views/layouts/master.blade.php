<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('vendor/bootstrap-4.0.0-alpha6/css/bootstrap.css') !!}">
    @yield('css')
</head>

<body>

@include('common.header')

<main>
    @yield('content')
</main>

@include('common.footer')

<script src="{!! asset('vendor/jquery/jquery-3.2.0.min.js') !!}"></script>
<script src="{!! asset('vendor/tether/js/tether.min.js') !!}"></script>
<script src="{!! asset('vendor/bootstrap-4.0.0-alpha6/js/bootstrap.min.js') !!}"></script>

@yield('scripts')

</body>
</html>