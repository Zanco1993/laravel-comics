<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

    <header>
        @include('partials.header')
    </header>

    <div class="jumbotron">
        @yield('jumbo')
    </div>

    {{-- main-series --}}
    <div>
        @yield('mainSeries')
    </div>

    {{-- other --}}
    <div class="other">
        @yield('other')
    </div>

    <footer>
        @yield('footer-link')
        @yield('footer-social')

    </footer>

</body>
</html>