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
<body class="bg-gradient min-h-full">
    <header class="block bg-white mx-0 w-full text-center py-6">
        <a href="/">

            <h1 class="text-4xl text-indigo-700 font-black uppercase">
                <img src="/images/notifius.png" alt="NotifiUs, LLC" title="NotifiUs, LLC &middot; Ready to level up your call center?"
                     class="align-text-top w-64 inline-block">Encrypt
            </h1>
        </a>
    </header>
    @yield('content')
    <footer class="container mx-auto w-full text-center max-w-xl my-6">
        <small class="text-sm text-white font-sans">
            All Rights Reserved &copy; <a class="font-semibold hover:text-indigo-100" href="https://notifi.us">NotifiUs, LLC</a>
        </small>
    </footer>
</body>
</html>
