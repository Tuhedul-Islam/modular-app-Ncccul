<!doctype html>
<html lang="en" class="minimal-theme">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />

    @vite([
        'resources/css/app.css',
    ])

    <title>{{ config('app.name', 'NCCCUL') }} | @yield('title', 'Home')</title>
    <title>@yield('title', 'Ncccul')</title>
    <script>
        const APP_URL = '{{url('/')}}';
        const APP_TOKEN = '{{csrf_token()}}';
    </script>
</head>
<body>
    <!--start wrapper-->
    <div class="wrapper">
         @include('admin.layouts.header')
         @include('admin.layouts.aside')
        {{-- Main content --}}
         <main class="page-content">
            @yield('content')
        </main>
        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->
    </div>
    <!--end start wrapper-->

    @vite([
            'resources/js/app.js',
    ])

    <script>
        new PerfectScrollbar(".best-product")
        new PerfectScrollbar(".top-sellers-list")
    </script>

    @stack('scripts')
</body>
</html>
