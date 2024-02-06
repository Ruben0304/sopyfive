<?php

namespace App\Livewire\Market;

use App\Livewire\Actions\AddToCart;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class ProductInfo extends Component
{



    public Product $producto;

    #[Validate('numeric|between:1,10')]
    public int $quantity;


    public function mount(Product $producto)
    {
        $this->producto = $producto;
        $this->quantity = 1;

    }

    public function increment()
    {

        $this->quantity++;

    }

    public function decrement()
    {

        $this->quantity--;

    }


    public function addToCart()
    {

        $this->validate();
        new AddToCart($this->producto, $this->quantity);
        $this->dispatch('cartItemAdded');
    }


    public function render()
    {
        return view('livewire.market.product-info')->layout('layouts.market');
    }
}
