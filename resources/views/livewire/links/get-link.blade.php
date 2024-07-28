<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <h4>Tavas saīsinātās adreses:</h4>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="text-surface min-w-full text-left text-sm">
                                <thead class="border-b border-neutral-200 font-medium">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Adrese</th>
                                        <th scope="col" class="px-6 py-4">Saīsinātā adrese</th>
                                        <th scope="col" class="px-6 py-4"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($links as $link)
                                        <tr class="border-b border-neutral-200">
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a
                                                    class="text-blue-500 underline hover:text-blue-700"
                                                    href="{{ $link->long_url }}"
                                                    target="_blank"
                                                >
                                                    {{ $link->long_url }}
                                                </a>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a
                                                    class="text-blue-500 underline hover:text-blue-700"
                                                    href="{{ $link->short_url }}"
                                                    target="_blank"
                                                >
                                                    {{ $link->short_url }}
                                                </a>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <a href="#">
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        class="size-6"
                                                    >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"
                                                        />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
