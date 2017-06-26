<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('vendor/bootstrap-4.0.0-alpha6/css/bootstrap.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app.css') !!}">
    @yield('css')
</head>

<body>

@include('common.header.header')

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
<script>
    $(document).ready(function () {
        $("#loginbtn").click(function () {
            $("#login_form").slideDown();
        });
    });

    $(document).mouseup(function(e)
    {
        var container = $("#login_form");
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            container.slideUp();
        }
    });
</script>

@yield('scripts')

</body>
</html>