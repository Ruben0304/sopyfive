<?php

namespace App\Livewire\Market\Layout;


use Darryldecode\Cart\Facades\CartFacade as FacadesCartFacade;
use Livewire\Component;


class Navigation extends Component
{
    public int $cartSize;
 
    // #[On('cartItemAdded')] 
    // public function updateCartItemsCount()
    // {
    //     $sessionId = session()->getId();
    //     $this->cartSize = FacadesCartFacade::session($sessionId)->getContent()->count();
    // }

    public function mount()
    {
        $sessionId = session()->getId();
        $this->cartSize = FacadesCartFacade::session($sessionId)->getContent()->count();
    }

  

    public function render()
    {
        return view('livewire.market.layout.navigation');
    }
}
