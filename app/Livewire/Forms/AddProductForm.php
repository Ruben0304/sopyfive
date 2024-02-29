<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\Rule;
use Livewire\Form;

class AddProductForm extends Form
{
    #[Rule(['required'])]
    public $name = '';

    #[Rule(['required'])]
    public $description = '';

    #[Rule(['required', 'numeric'])]
    public $price = '';

    #[Rule(['required', 'integer'])]
    public $stock = '';

    #[Rule(['required','image', 'max:5000', 'mimes:jpg'])]
    public $image = '';

    #[Rule(['required','numeric'])]
    public $category = '';


    public function save()
    {
        $product = Product::create($this->only(['name','category', 'price', 'stock', 'description']));
        $this->image->storeAs('products/', $product->id . '.jpg', 'public');
        $this->reset();
    }


}
