<?php

namespace App\Livewire\Market\Component;

use Livewire\Component;

class Deals extends Component
{
    public $titulo;
    public $items;

    public function mount($titulo, $items)
    {
        $this->titulo = $titulo;
        $this->items = $items;
    }

    public function render()
    {
        return view('livewire.market.component.deals');
    }
}
