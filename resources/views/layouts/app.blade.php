<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('includes.seo')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net"/>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png"/>
    <link rel="manifest" href="/favicon/site.webmanifest"/>

    {{-- Google tag (gtag.js) --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFBDKJCN44"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-ZFBDKJCN44');
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    
    <!-- Page Content -->
    <main class="flex min-h-screen flex-col items-center justify-between">
        @auth
            <livewire:layout.navigation/>
        @endauth
        {{ $slot }}
        <footer class="mx-auto w-full max-w-5xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="text-center">&copy; {{  date ('Y') }} S&L Media SIA
                | <a
                    href="https://slmedia.lv/"
                    target="_blank"
                    class="text-black-500 hover:text-gray-700 underline">slmedia.lv</a> | @lang('All rights reserved')
            </p>
        </footer>
    </main>

</div>
</body>
</html>
