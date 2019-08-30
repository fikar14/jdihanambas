<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smart Anambas | @yield("title")</title> 

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Dosis|Lato|Merriweather|Oswald|Roboto+Condensed|Source+Serif+Pro|Teko|Yanone+Kaffeesatz" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('nav.navbar')
    @include('nav.managenavbar')

    <div id="app">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="../node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <script src="../node_modules/@ckeditor/ckeditor5-vue/dist/ckeditor.js"></script>
    @yield('scripts')
</body>
</html>
