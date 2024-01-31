<?php

namespace App\Livewire\Market\Admin;

use App\Models\Product;
use Livewire\Component;


class AddProduct extends Component
{
    public $name;
    public $price;
    public $stock;
    public $image = 'tt';
    // public $category;
    public $description;

    public function save()
    {
        Product::create($this->only(['name', 'price', 'stock', 'description']));
        $this->reset();
    }

    public function render()
    {
        return view('livewire.market.admin.add-product');
    }
}
