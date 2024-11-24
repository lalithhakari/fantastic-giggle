<!DOCTYPE html>
<html lang="en" class="text-gray-700">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageName')</title>
    <link rel="icon" href="/favicon.ico" sizes="32x32">
    <link rel="icon" href="/favicon.svg" sizes="any" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    @include('layouts.announcements-banner')
    @include('layouts.header')
    @yield('body')
    @include('layouts.footer')
</body>

</html>