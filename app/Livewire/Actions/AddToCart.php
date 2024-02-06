<?php

namespace App\Livewire\Actions;

use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Livewire\Component;

class AddToCart
{


    public function __construct(Product $producto, int $quantity = 1)
    {
        $sessionId = session()->getId();
        CartFacade::session($sessionId)->add($producto->id, $producto->name, 0, $quantity)->associate(Product::class);
        session()->flash('success', 'Producto agregado al carrito con éxito!');


    }


}
