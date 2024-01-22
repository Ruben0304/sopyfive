<?php

namespace App\Livewire\Market\Component;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class OrderDetailsCart extends Component
{
    public $total;
    public $envio;
    public $cartItems;
    public $subtotal;



    public function mount(){

        $sessionId = session()->getId();
        CartFacade::session($sessionId)->add($this->producto->id, $this->producto->name, 0, 1);

        $envio = 0;
        

    }

    public function render()
    {
        return view('livewire.market.component.order-details-cart');
    }
}
