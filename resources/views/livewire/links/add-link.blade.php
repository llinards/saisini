<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <h4>Saīsini adresi</h4>
            <form wire:submit="addLink">
                <div class="space-y-12">
                    <div class="border-b border-neutral-200 pb-12">
                        <div class="mt-4">
                            <label for="long_url" class="block text-sm font-medium leading-6 text-gray-900">
                                Oriģinālā adrese
                            </label>
                            <input
                                wire:model="long_url"
                                type="url"
                                name="long_url"
                                id="long_url"
                                class="w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:leading-6"
                            />
                            <x-input-error class="mt-2" :messages="$errors->get('long_url')"/>
                        </div>
                        @if ($isShortUrlOptionVisible)
                            <div class="mt-4">
                                <label for="short_url" class="block text-sm font-medium leading-6 text-gray-900">
                                    Tava izvēles saīsinātā adrese
                                </label>
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600"
                                >
                                    <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">
                                        {{ URL::to('/') }}/
                                    </span>
                                    <input
                                        wire:model="short_url"
                                        type="text"
                                        name="short_url"
                                        id="short_url"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    />
                                </div>
                                <x-input-error class="mt-2" :messages="$errors->get('short_url')"/>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button
                        type="submit"
                        class="flex rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    >
                        Saīsināt
                        <x-loading-spinner/>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
