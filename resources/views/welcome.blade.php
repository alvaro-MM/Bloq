<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
    <h1>Inicio</h1>
    <ul>
        <li><a href= {{ route('home') }} >Home</a></li>
        <li><a href= {{ route('blog') }} > Blog </a></li>
        <li><a href= {{ route('about') }}>About us</a></li>
        <li><a href= {{ route('contact') }}>Contact</a></li>
    </ul>

    </body>
</html>
