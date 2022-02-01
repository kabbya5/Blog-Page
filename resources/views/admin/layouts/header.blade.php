<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
            <nav>
                <div class="d-flex justify-content-between">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"> {{ $now }} </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"> Advertisement </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"> About </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"> Contact </a>
                        </li>
                    </ul>
                    <div class="sosial-link">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link"> Advertisement </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"> About </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"> Contact </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>