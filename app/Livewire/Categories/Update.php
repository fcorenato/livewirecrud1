<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Update extends Component
{
    public Category $category;

    protected function rules(){
        return [
            'category.name' => 'required|min:4|max:255|string|unique:categories,name,' . $this->category->id
        ];
    }

    public function updated($property){
        $this->validateOnly($property);
    }

    protected $messages =[
        'category.name.required' => 'Nome obrigatório',
        'category.name.min' => 'Digite pelo menos 4 caracteres',
        'category.name.max' => 'Tamanho máximo 255',
        'category.name.string' => 'Tipo inválido. Digite texto.',
        'category.name.unique' => 'Categoria já exite.',
    ];


    public function render()
    {
        return view('livewire.categories.update');
    }

    public function save() {
        $this->validate();
        sleep(1);
        $this->category->save();

        return redirect()->route('category.index')
        ->with('message','Registro editado com sucesso.');
    }
}
