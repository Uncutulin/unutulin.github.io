<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
</style>
@section('head-principal')

    @include('layout.partials.head')

@show
<body class="hold-transition skin-blue sidebar-mini">

<div id="app">
    @auth
        <div class="wrapper"></div>
    @endauth
    @guest
        @yield('content')
    @endguest
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
<script src="{{ asset('materialize/js/gallery.min.opt.js') }}"></script>
<!-- Scripts -->
@stack('scripts')

</body>
</html>