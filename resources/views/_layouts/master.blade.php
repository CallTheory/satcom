<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <script src="{{ secure_asset('/js/app.js') }}"></script>
    @stack('scripts')
    <link href="{{ secure_asset('/css/app.css') }}" rel="stylesheet">
</head>
<body class="my-12 bg-white">
    <header class="container mx-auto w-full text-center max-w-xl my-4">
        <a href="/">

            <h1 class="text-4xl text-indigo-700 font-black uppercase">
                <img src="/images/notifius.png" alt="NotifiUs, LLC" title="NotifiUs, LLC &middot; Ready to level up your call center?"
                     class="align-text-top w-64 inline-block">Encrypt
            </h1>
        </a>
    </header>
    @yield('content')
    <footer class="container mx-auto w-full text-center max-w-xl my-12">
        <small class="text-sm text-gray-400 font-normal">
            All Rights Reserved &copy; <a class="hover:text-indigo-600" href="https://notifi.us">NotifiUs, LLC</a>
        </small>
    </footer>
</body>
</html>
