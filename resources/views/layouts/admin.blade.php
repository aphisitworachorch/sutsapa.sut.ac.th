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
                            <a class="nav-link" href="/sapa/advocacy">ดูคำร้องศูนย์พิทักษ์สิทธิ์นักศึกษา</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sapa/news_announce">เพิ่ม / ลบ / ดู ประกาศ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">สวัสดี คุณ {{ Auth::user()->name }} {{ Auth::user()->surname }}
                                ค่ะ</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" id="logout">{{ __('ลงชื่อออกจากระบบ') }} </a>
                            </div>

                        </li>
                    </ul>
                </div>
            </form>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>

    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div>

</body>
</html>
