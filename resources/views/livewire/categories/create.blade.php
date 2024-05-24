<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Category') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <form wire:submit.prevent="save">
                    <div>
                        <div class="w-full">
                            <x-input-label for="name" value="Name" />
                            <x-text-input wire:model.blur="category.name" id="name" class="block w-full mt-1"
                                type="text" name="name" />
                            <x-input-error :messages="$errors->get('category.name')" class="mt-2" />
                        </div>
                    </div>

                    <x-primary-button wire:loading.remove wire:target="save" type="submit" class="mt-4">
                        Save
                    </x-primary-button>

                    <x-primary-button wire:loading wire:target="save" class="mt-4">
                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </x-primary-button>

                </form>
            </div>
        </div>
    </div>


</div>
