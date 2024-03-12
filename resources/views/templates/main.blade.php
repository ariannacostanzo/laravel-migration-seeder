<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    <style>body {display: none}</style>
    @vite('resources/js/app.js')
    @yield('cdns')
</head>
<body>

    {{-- header --}}
    @include('includes.header')
    {{-- main --}}
    <div class="container my-5">
        @yield('main-content')
    </div>

    {{-- footer --}}

    @yield('scripts')
</body>
</html>