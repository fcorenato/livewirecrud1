<?php

namespace App\Livewire\Buttons;

use Livewire\Component;

class Primary extends Component
{
    public $label;
    
    public function render()
    {
        return view('livewire.buttons.primary');
    }
}
