<?php

namespace App\Livewire\Market\Component;

use App\Livewire\Market\Layout\Navigation;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as FacadesCartFacade;
use Livewire\Component;



class ProductCard extends Component
{
    public $producto;

    public function addToCart()
    {
        $sessionId = session()->getId();
        FacadesCartFacade::session($sessionId)->add($this->producto->id, $this->producto->name, 0, 1);


        // $this->dispatch('cartItemAdded');
        session()->flash('success', 'Producto agregado al carrito con éxito!');
        return redirect(request()->header('Referer'));
    }


    public function mount($producto)
    {
        $this->producto = $producto;
    }
    public function render()
    {
        return view('livewire.market.component.product-card');
    }
}
