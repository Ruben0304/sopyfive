<?php

namespace App\Livewire\Market\Component;

use App\Livewire\Actions\AddToCart;
use App\Livewire\Market\Layout\Navigation;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as FacadesCartFacade;
use Livewire\Component;



class ProductCard extends Component
{
    public $producto;

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
        return view('livewire.market.component.product-card');
    }
}
