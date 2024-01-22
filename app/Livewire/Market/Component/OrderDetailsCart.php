<?php

namespace App\Livewire\Market\Component;

use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;
use Livewire\Attributes\On;

class OrderDetailsCart extends Component
{
    public $total;
    public $envio;
    public $cartItems;
    public $subtotal;






    private function updateSummary()
    {
        $sessionId = session()->getId();
        $subtotal = 0;
        $this->cartItems = CartFacade::session($sessionId)->getContent();

        //calcular subtotal preguntando precio actual del producto
        foreach ($this->cartItems as $c) {
            $subtotal += Product::find($c->id)->price * $c->quantity;
        }
        $this->subtotal = $subtotal;
        $this->envio = 0;
        $this->total = $this->subtotal + $this->envio;
    }


    public function mount()
    {

        $this->updateSummary();
    }


    #[On('cartModified')]
    public function modifiedCart()
    {
        $this->updateSummary();
    }

    #[On('cartDeleted')]
    public function deletedCart()
    {
        $this->updateSummary();
    }

    public function render()
    {
        return view('livewire.market.component.order-details-cart');
    }
}
