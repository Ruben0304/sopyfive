<?php

namespace App\Livewire\Market\Admin;

use Livewire\Component;
use Livewire\Attributes\Layout;

class AddProduct extends Component
{
    #[Layout('market')]
    public function render()
    {
        return view('livewire.market.admin.add-product');
    }
}
