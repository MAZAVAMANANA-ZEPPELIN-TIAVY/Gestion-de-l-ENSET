<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/normelize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <img width="50" height="42" src="images/logoEnset.jpg" alt="ENSET">
            <nav>
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li><a href="{{ route('a_propos') }}">&Agrave; propos</a></li>
            </nav>
        </header>
        @yield('content')

        <footer>
            <h1>Footer naka</h1>
        </footer>
    </body>
</html>