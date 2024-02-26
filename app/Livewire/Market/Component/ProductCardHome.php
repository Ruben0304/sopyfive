<?php

namespace App\Livewire\Market\Component;

use App\Livewire\Actions\AddToCart;
use App\Models\Product;
use Livewire\Component;

class ProductCardHome extends Component
{
    public Product $producto;

    public function addToCart()
    {
        new AddToCart($this->producto);
        $this->dispatch('cartItemAdded');

    }

    public function mount($producto)
    {
        $this->producto = $producto;
    }

    public function render()
    {
        return view('livewire.market.component.product-card-home');
    }
}
