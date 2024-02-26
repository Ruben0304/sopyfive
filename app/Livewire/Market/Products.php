<?php

namespace App\Livewire\Market;

use Livewire\Component;


class Products extends Component
{
    public string $search;

    public function mount($search = "")
    {
        $this->search = $search;
    }

    public function render()
    {
        return view('livewire.market.products')->layout('layouts.market');
    }
}
