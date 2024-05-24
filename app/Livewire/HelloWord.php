<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWord extends Component
{
    public $title;
    
    public function render()
    {
        return view('livewire.hello-word');
    }
}
