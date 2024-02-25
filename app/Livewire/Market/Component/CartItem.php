<?php

namespace App\Livewire\Market\Component;

use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CartItem extends Component
{



    #[Validate('required|numeric|min:1')]
    public $quantity;
    public $item;
    public $price;

    public function mount($item)
    {
        $this->item = $item;
        $this->quantity = $item->quantity;
        $this->price = Product::find($item->id)->price;
    }

    //incrementar y decrementar carrito
    public function updatedQuantity($value)
    {

        if ($value > 1) {

            $sessionId = session()->getId();
            CartFacade::session($sessionId)->update($this->item->id, array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $value
                ),
            ));
        }
        $this->dispatch('cartModified');
    }


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
        $this->dispatch('cartModified');
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

        $this->dispatch('cartModified');
    }

    //eliminar del carrito
    public function removeFromCart()
    {
        $sessionId = session()->getId();
        CartFacade::session($sessionId)->remove($this->item->id);
        $this->dispatch('cartDeleted');
    }



    public function render()
    {
        return view('livewire.market.component.cart-item');
    }
}
