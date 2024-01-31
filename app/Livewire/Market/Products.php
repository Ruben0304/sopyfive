<?php

namespace App\Livewire\Market;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Products extends Component
{
    
    #[Layout('layouts.market')]
    public function render()
    {
        return view('livewire.market.products');
    }
}
