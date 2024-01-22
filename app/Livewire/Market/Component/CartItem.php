<?php

namespace App\Livewire\Market\Component;

use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class CartItem extends Component
{

    public $item;
    public $quantity;
    public $price;


    public function mount($item)
    {
        $this->item = $item;
        $this->quantity = $item->quantity;
        $this->price = Product::find($item->id)->price;
    }

    //incrementar y decrementar carrito

    public function decrement()
    {
        if ($this->quantity > 1) {

            $this->quantity--;
            $sessionId = session()->getId();
            CartFacade::session($sessionId)->update($this->item->id, array(
                'quantity' => array(
                    'relative' => true,
                    'value' => -1
                ),
            ));
        }
    }

    public function increment()
    {

        $this->quantity++;
       
        $sessionId = session()->getId();
        CartFacade::session($sessionId)->update($this->item->id, array(
            'quantity' => array(
                'relative' => true,
                'value' => 1
            ),
        ));
    }



    public function render()
    {
        return view('livewire.market.component.cart-item');
    }
}
