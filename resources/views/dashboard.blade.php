<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-6">
        <x-status-message />
    </div>

    <div class="py-6">
        <livewire:links.add-link />
    </div>
    <div class="py-6">
        <livewire:links.get-link />
    </div>
</x-app-layout>
