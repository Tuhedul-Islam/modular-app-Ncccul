<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NCCCUL') }} | @yield('title', 'Home')</title>
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/x-icon">

    @vite([
        '../../resources/css/app-frontend.css',
    ])

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body {{ request()->is('register') ? 'style=background-color:#6f6f6f;' : '' }}>
    <div class="wrapper" style="background-color:#6f6f6f;">
        <div class="{{ request()->is('register') ? 'register-card' : 'authentication-card' }}">
            <div class="container">
                <div class="">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-5 bg-login d-flex align-items-center justify-content-center p-4">
                                <img src="{{ asset('assets/images/logo-icon.png') }}" width="150" style="border-radius:70px;" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-7" style="background-color:#efefef;">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite([
        '../../resources/js/app-frontend.js',
    ])

    @foreach (['success', 'error', 'warning', 'info'] as $type)
        @if (session($type))
            <script>
            $(document).ready(function () {
                Lobibox.notify('{{ $type }}', {
                    pauseDelayOnHover: true,
                    continueDelayOnInactiveTab: false,
                    position: 'center top',
                    size: 'mini',
                    msg: '{{ session($type) }}'
                });
            });
            </script>
        @endif
    @endforeach
</body>
</html>
