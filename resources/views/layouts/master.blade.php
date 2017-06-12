<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('vendor/bootstrap-4.0.0-alpha6/css/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app.css') !!}">
    {{--<script src="{!! asset('vendor/livejs/live.js') !!}"></script> --}}{{-- TODO remove on deploy --}}
    {{--<link rel="stylesheet" href="{!! asset('css/style.css') !!}">--}}
    @yield('css')
</head>

<body>

@include('common.header')

{{--@section('navigation')--}}
    {{--<nav class="container">--}}
        {{--@include('common.breadcrumb')--}}
    {{--</nav>--}}
{{--@endsection--}}

{{--@yield('navigation')--}}

@yield('content')

@include('common.footer')

<script src="{!! asset('vendor/jquery/jquery-3.2.0.min.js') !!}"></script>
<script src="{!! asset('vendor/tether/js/tether.min.js') !!}"></script>
<script src="{!! asset('vendor/bootstrap-4.0.0-alpha6/js/bootstrap.min.js') !!}"></script>

@yield('scripts')

</body>
</html>