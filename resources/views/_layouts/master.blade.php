<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Stop sending sensitive information directly in email">
    <meta name="keywords" content="encrypt,credentials,notifi,notifius,notifi us,labbett,patrick,patrick labbett,ohio,call center,call,center,answering,service,answering service">
    <meta property="og:site_name" content="encrypt.notifi.us">
    <meta property="og:title" content="NotifiUs Encrypt">
    <meta property="og:description" content="Stop sending sensitive information directly in email">
    <meta property="og:image" content="{{ secure_url('/images/safe.png') }}">
    <meta property="og:url" content="https://encrypt.notifi.us">
    <meta property="og:type" content="website">
    <meta property="og:image:alt" content="Stop sending sensitive information directly in email">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image:alt" content="Level up your call center.">

    <link rel="icon" type="image/png" href="/images/notifius-icon.png">


    <title>@yield('title')</title>

    @vite('resources/js/app.js')

    @stack('scripts')

</head>
<body class="bg-gradient min-h-full">
    <header class="block bg-white mx-0 w-full text-center py-6 pt-8 border-b border-gray-300">
        <h1 class="text-4xl text-indigo-700 font-black uppercase">
            <a class="" href="/">
                <img src="/images/notifius-satcom.svg" alt="NotifiUs, LLC" title="NotifiUs, LLC &middot; Ready to level up your call center?"
                 class="align-text-top max-w-xl inline-block">
            </a>
        </h1>
    </header>
    @yield('content')
    <footer class="container mx-auto w-full text-center text-gray-600 max-w-xl mt-6">
        <a title="About encrypt.notifi.us" href="/about" class="font-normal text-indigo-700 hover:text-indigo-900">About</a> &middot; <a title="Terms of Use" href="/terms" class="font-normal text-indigo-700 hover:text-indigo-900">Terms</a> &middot; <a title="Privacy Policy" href="/privacy" class="font-normal text-indigo-700 hover:text-indigo-900">Privacy</a>
    </footer>
    <footer class="container mx-auto w-full text-center max-w-xl my-3">
        <small class="text-sm text-white font-sans">
            All Rights Reserved &copy; <a title="Ready to level up your call center?" class="font-semibold hover:text-indigo-100" href="https://notifi.us">NotifiUs, LLC</a>
        </small>
    </footer>
</body>
</html>
