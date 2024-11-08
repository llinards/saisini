@php
    $status = session('success') ? 'success' : (session('error') ? 'error' : null);
@endphp

@if ($status)
    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => (show = false), 6000)"
        class="{{ $status === 'success' ? 'bg-green-500' : 'bg-red-500' }} relative block w-full p-4 text-center font-semibold leading-5 text-white opacity-100"
    >
        {{ session($status) }}
    </div>
@endif
