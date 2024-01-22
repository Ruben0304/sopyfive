<?php

namespace App\Livewire\Market\Component;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class CartTable extends Component
{
    public $cartItems;

    public function mount()
    {
        $sessionId = session()->getId();
        $this->cartItems = CartFacade::session($sessionId)->getContent();
        
    }

    public function render()
    {
        return view('livewire.market.component.cart-table');
    }
}
