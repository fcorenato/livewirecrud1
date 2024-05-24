<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex justify-between h-16">
                <div>Category Index</div>
                <div><a class="" href="{{ route('category.create') }}">Criar</a></div>
            
            </div>
        </h2>
        
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-table 
            :items="$categories"
            :columns="[['label' => 'Name', 'column' => 'name' ]]"
            edit="category.update"
            :delete="true"
        />
    </div>
</div>
