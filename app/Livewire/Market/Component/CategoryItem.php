<?php

namespace App\Livewire\Market\Component;

use App\Models\Category;
use Livewire\Component;

class CategoryItem extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.market.component.category-item');
    }
}
