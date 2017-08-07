@extends('layouts.master')

@section('content')
    <main class="container">
        @yield('breadcrumb')
        <section id="document-body">
            <div id="document-body-content">
                @yield('content-main')
            </div>
            <aside id="document-body-sidebar">
                asdf
                {{--@include('sidebar')--}}
            </aside>
        </section>
    </main>
@endsection