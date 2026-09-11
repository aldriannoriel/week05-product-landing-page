<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale-1">

        <title>@yield('title', config('app.name', 'Landing Page'))</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <x-navbar />
        @yield('content')
        <x-footer />
    </body>
</html>
