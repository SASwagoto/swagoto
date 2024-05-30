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
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <img class="w-10" src="{{asset('frontend/images/logo_code.png')}}" alt="">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
        <script src="{{asset('frontend/js/darkmode.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>
    </body>
</html>

