<x-head/>
<body class="font-sans text-gray-900 antialiased">
<div class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0">
    <div class="w-1/4">
        <a href="/" wire:navigate>
            <x-application-logo class="fill-current text-gray-500"/>
        </a>
    </div>

    <div class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
</body>
</html>
