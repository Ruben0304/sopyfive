<?php

namespace App\Livewire\Market\Component;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;
use Livewire\Attributes\On;
class CartTable extends Component
{
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
        return view('livewire.market.component.cart-table');
    }
}
