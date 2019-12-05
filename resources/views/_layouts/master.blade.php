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
    <header class="block bg-white mx-0 w-full text-center py-6 pt-8 border-b border-gray-300">
        <a href="/">
            <h1 class="text-4xl text-indigo-700 font-black uppercase">
                <img src="/images/notifius.png" alt="NotifiUs, LLC" title="NotifiUs, LLC &middot; Ready to level up your call center?"
                     class="align-text-top w-64 inline-block">Encrypt
            </h1>
            <p class="text-sm text-gray-400 font-semibold text-center px-4">
                Stop sending sensitive information directly in emails.
            </p>
        </a>
    </header>
    @yield('content')
    <footer class="container mx-auto w-full text-center text-gray-600 max-w-xl mt-6">
        <a title="About encrypt.notifi.us" href="/about" class="font-extrabold text-indigo-700 hover:text-indigo-900">About</a> &middot; <a title="Terms of Use" href="/terms" class="font-extrabold text-indigo-700 hover:text-indigo-900">Terms</a> &middot; <a title="Privacy Policy" href="/privacy" class="font-extrabold text-indigo-700 hover:text-indigo-900">Privacy</a>
    </footer>
    <footer class="container mx-auto w-full text-center max-w-xl my-3">
        <small class="text-sm text-white font-sans">
            All Rights Reserved &copy; <a title="Ready to level up your call center?" class="font-semibold hover:text-indigo-100" href="https://notifi.us">NotifiUs, LLC</a>
        </small>
    </footer>
</body>
</html>
