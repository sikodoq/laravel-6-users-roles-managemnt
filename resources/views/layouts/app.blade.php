<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ mix('css/all.css') }}" rel="stylesheet"> --}}
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body class="wrapper-login">
    <div id="app">
        @guest
        
        @else
        @include('partials._header')
        @include('partials._sidebar')
        @endguest
        <div class="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        @guest
        @else
        @include('partials._footer')
        @endguest
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
{{-- <script src="{{ asset('js/all.js') }}"></script> --}}
{{-- <script src="{{ asset('js/custom.js') }}"></script> --}}
    <!--Plugin-->

</body>

</html>
