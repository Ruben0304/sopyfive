<?php

namespace App\Livewire\Market;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;

class Cart extends Component
{
    #[Layout('layouts.market')]
    public $cartItems;

    public function mount()
    {
        $sessionId = session()->getId();
        $this->cartItems = CartFacade::session($sessionId)->getContent();
    }

    #[On('cartDeleted')]
    public function onDeleteCartItems()
    {
        $sessionId = session()->getId();
        $this->cartItems = CartFacade::session($sessionId)->getContent();
    }
    public function render()
    {
        return view('livewire.market.cart');
    }
}
