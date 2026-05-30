<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

        @vite(['resources/css/admin.css'])
</head>
<body>
    @include('admin.header')
    <section class="grid-layout">
        @include('admin.navigation_side')
        @yield('content')
    </section>
</body>
</html>