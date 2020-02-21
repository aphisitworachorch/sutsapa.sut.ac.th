<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>สภานักศึกษา มหาวิทยาลัยเทคโนโลยีสุรนารี</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container py-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
            <a class="navbar-brand" href="#"><img style="width:300px;" src="{{ asset('assets/logo_header.png') }}"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/news">ข่าวสาร</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/discuss">กระดานสนทนา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/advocacy">ศูนย์พิทักษ์สิทธินักศึกษา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">เกี่ยวกับ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">ติดต่อ</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
            </form>
        </nav>

    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
