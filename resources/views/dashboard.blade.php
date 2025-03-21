<x-app-layout>
    <div class="mx-auto max-w-7xl pt-6 sm:px-6 lg:px-8">
        <x-status-message/>
    </div>

    <div class="mx-auto w-full max-w-3xl px-4 py-6 sm:px-6 lg:px-8">
        <livewire:links.add-link/>
    </div>
    @auth
        <div class="mx-auto w-full max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <livewire:links.get-link/>
        </div>
    @endauth
</x-app-layout>
