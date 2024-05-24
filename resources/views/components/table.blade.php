<div>
    <div class="overflow-x-auto">
        <table class="divide-y divide-gray-300 w-full">
            <thead class="bg-gray-50">
                <tr>
                    @foreach ($columns as $column)
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                            {{ $column['label'] }}
                        </th>
                    @endforeach

                    @if (isset($edit) && $edit)
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    @endif

                    @if (isset($delete) && $delete)
                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                            <span class="sr-only">Delete</span>
                        </th>
                    @endif
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($items as $item)
                    <tr>
                        @foreach ($columns as $column)
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                {{ data_get($item, $column['column']) }}
                            </td>
                        @endforeach

                        @if (isset($edit) && $edit)
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                <a href="{{ route($edit, $item->id) }}" class="text-indigo-600 hover:text-indigo-900">
                                    {{ __('Edit') }}
                                </a>
                            </td>
                        @endif

                        @if (isset($delete) && $delete)
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                <button wire:click="destroy({{$item->id}})" href="#" class="text-indigo-600 hover:text-indigo-900">
                                    {{ __('Delete') }}
                                </button>
                            </td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div class="py-4">
        {{$items->links()}}
    </div>
</div>
