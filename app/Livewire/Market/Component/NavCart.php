<?php

namespace App\Livewire\Market\Component;

use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;
use Livewire\Attributes\On;

class NavCart extends Component
{
    public int $cartSize;

     #[On('cartItemAdded')]
     public function updateCartItemsCount()
     {
         $sessionId = session()->getId();
         $this->cartSize = CartFacade::session($sessionId)->getContent()->count();
     }

    #[On('cartDeleted')]
    public function deleteItem()
    {
        $this->updateCartItemsCount();
    }

    public function mount()
    {
        $sessionId = session()->getId();
        $this->cartSize = CartFacade::session($sessionId)->getContent()->count();
    }
    public function render()
    {
        return view('livewire.market.component.nav-cart');
    }
}
