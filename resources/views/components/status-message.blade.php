@if (session('success'))
    <div class="relative block w-full bg-green-500 p-4 text-center font-semibold leading-5 text-white opacity-100">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="relative block w-full bg-red-500 p-4 font-semibold leading-5 text-white opacity-100">
        {{ session('error') }}
    </div>
@endif
