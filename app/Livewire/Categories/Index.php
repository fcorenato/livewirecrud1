<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()    {
        return view('livewire.categories.index', [
            'categories' => Category::paginate(2)
        ]);
    }

    public function destroy(Category $category){
        $category->delete();
        // session()->flash('message', 'Post successfully updated.');
        return redirect()->route('category.index')
        ->with('message','Registro deletado com sucesso.');
        
    }
}
