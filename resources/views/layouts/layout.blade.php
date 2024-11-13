<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageName')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.announcements-banner')
    @include('layouts.header')
    <div class="container mx-auto">
        @yield('body')
    </div>
    @include('layouts.footer')
</body>

</html>