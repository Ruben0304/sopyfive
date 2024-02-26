<?php

namespace App\Livewire\Market;

use App\Livewire\Actions\AddToCart;
use App\Models\Articulo;
use App\Models\Product;
use Livewire\Component;

class MarketHome extends Component
{
    public Articulo $article1;
    public Articulo $article2;

    public function mount()
    {
        $this->article1 = Articulo::find(2);
        $this->article2 = Articulo::find(3);
     //   $this->article1 = Articulo::inRandomOrder()->first();
      //  $this->article2 = $this->articulo2mount();
    }



    public function articulo2mount() : Articulo
    {
        $articulo = Articulo::inRandomOrder()->first();
        if ($articulo->id == $this->article1->id){
            return articulo2mount();
        }
        return $articulo;

    }


    public function render()
    {

        return view('livewire.market.market-home', ['productos' => Product::all()->take(8)])->layout('layouts.market');
    }
}
