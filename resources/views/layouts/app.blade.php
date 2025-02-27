<x-head/>
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
                    class="text-black-500 hover:text-gray-700 underline">slmedia.lv</a> | @lang('All rights reserved') |
                <a
                    href="mailto:linards@slmedia.lv"
                    target="_blank"
                    class="text-black-500 hover:text-gray-700 underline">Iesaki jaunas funkcijas</a>
            </p>
        </footer>
    </main>

</div>
</body>
</html>
