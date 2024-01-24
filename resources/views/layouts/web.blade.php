<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('frontend') }}/images/favicon.png" type="image/x-icon">
        <title>Swagoto</title>

        <link href="{{ asset('frontend') }}/css/all.min.css" rel="stylesheet">
        @stack('css')
        @vite('resources/css/app.css', 'resources/js/app.js')
    </head>

    <body class="antialiased">
        @include('layouts.header')

        @yield('content')
   
        <!-- Messenger Chat Plugin Code -->
        @include('layouts.footer')

        @stack('js')
    </body>
</html>
