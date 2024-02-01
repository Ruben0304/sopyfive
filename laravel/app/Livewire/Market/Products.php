<?php

namespace App\Livewire\Market;

use Livewire\Component;


class Products extends Component
{
    
   
    public function render()
    {
        return view('livewire.market.products')->layout('layouts.market');
    }
}
