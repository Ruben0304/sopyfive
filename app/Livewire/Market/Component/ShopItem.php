<?php

namespace App\Livewire\Market\Component;

use Livewire\Component;

class ShopItem extends Component
{
    public $nombre;
    public $precio;

    public function mount($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function render()
    {
        return view('livewire.market.component.shop-item');
    }
}
