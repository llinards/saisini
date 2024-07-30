<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <h4>Saīsini adresi</h4>
        <form wire:submit="addLink">
            <div class="space-y-12">
                <div class="border-b border-neutral-200 pb-12">
                    <div class="mt-4">
                        <x-input-label for="long_url" :value="__('Oriģinālā adrese')"/>
                        <x-text-input
                            wire:model="long_url"
                            name="long_url"
                            type="url"
                            class="mt-1 w-full"
                        />
                        <x-input-error class="mt-2 font-bold" :messages="$errors->get('long_url')"/>
                    </div>
                    @if(!$isShortUrlOptionVisible)
                        <div class="mt-4 text-center sm:text-left">
                            <x-primary-button type="button" wire:click="toggleShortUrlOption">
                                Gribu izvēlēties saīsināto adresi
                            </x-primary-button>
                        </div>
                    @endif
                    @if ($isShortUrlOptionVisible)
                        <div class="mt-4">
                            <x-input-label for="short_url" :value="__('Tava izvēles saīsinātā adrese')"/>
                            <div
                                class="mt-1 flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600"
                            >
                                    <span class="flex select-none items-center pl-3 text-gray-500">
                                        {{ URL::to('/') }}/
                                    </span>
                                <x-text-input
                                    wire:model="short_url"
                                    name="short_url"
                                    type="text"
                                    class=" flex-1 border-0 bg-transparent py-1.5 pl-0 focus:ring-0"
                                />
                            </div>
                            <x-input-error class="mt-2 font-bold" :messages="$errors->get('short_url')"/>
                        </div>
                    @endif
                </div>
            </div>
            <div class="mt-6 text-center sm:text-right">
                <x-primary-button>
                    Saīsināt
                    <x-loading-spinner/>
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
