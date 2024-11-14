<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        @guest
            <div class="flex justify-center">
                <img class="md:w-1/3" src="{{ asset('storage/logo.png') }}"/>
            </div>
        @endguest
        <form wire:submit="create">
            <div class="space-y-12">
                <div class="border-b border-neutral-200 pb-12">
                    <div class="mt-4">
                        <x-input-label for="long_url" :value="__('Long URL')"/>
                        <x-text-input wire:model="long_url" name="long_url" type="text" class="mt-1 w-full"/>
                        <x-input-error class="mt-2 font-bold" :messages="$errors->get('long_url')"/>
                    </div>
                    @if (! $isShortUrlOptionVisible)
                        <div class="mt-4 text-center sm:text-left">
                            <x-primary-button type="button" wire:click="toggleShortUrlOption">
                                {{ __('I want to choose short link') }}
                            </x-primary-button>
                        </div>
                    @endif

                    @if ($isShortUrlOptionVisible)
                        <div class="mt-4">
                            <x-input-label for="short_url" :value="__('Your chosen short link')"/>
                            <div
                                class="mt-1 flex rounded-md px-3 py-2 shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600"
                            >
                                <span
                                    class="flex w-auto select-none flex-wrap items-center whitespace-nowrap text-gray-500"
                                >
                                    {{ URL::to('/') }}/
                                </span>
                                <x-text-input
                                    wire:model.live="short_url"
                                    name="short_url"
                                    type="text"
                                    class="flex-1 border-0 bg-transparent p-0 shadow-none focus:ring-0"
                                />
                            </div>
                            <x-input-error class="mt-2 font-bold" :messages="$errors->get('short_url')"/>
                        </div>
                    @endif
                </div>
            </div>
            <livewire:links.show-created-link :short_url="$short_url"/>
            <div class="mt-6 text-center sm:text-right">
                <x-primary-button>
                    {{ __('Shorten') }}
                    <x-loading-spinner/>
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
