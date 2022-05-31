<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>StyleSalon</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="antialiased">
        <nav>
            nav place holder
        </nav>

        @yield('content')
        
        <footer>
            FAKE COPYWRITE 2022
            <a href="/appointments">appointment index</a>
            <a href="/stylists">stylist index</a>
            <a href="/appointments/create">add appointment</a>
        </footer>

    </body> 
</html>
    