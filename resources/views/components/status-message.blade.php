<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    @if (session('success'))
        <div class="relative mb-4 block w-full bg-green-500 p-4 font-semibold leading-5 text-white opacity-100">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="relative mb-4 block w-full bg-red-500 p-4 font-semibold leading-5 text-white opacity-100">
            {{ session('success') }}
        </div>
    @endif
</div>
