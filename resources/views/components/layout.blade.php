<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ $metaTitle ?? 'Default Title' }}</title>
    <meta name="description" content="{{$metadescription}}">

</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
{{ $slot }}
<x-partials.navigation/>
@isset($sidebar)
    <div id="sidebar">
        <h3>Sidebar</h3>
    </div>
@endisset

</body>
</html>
