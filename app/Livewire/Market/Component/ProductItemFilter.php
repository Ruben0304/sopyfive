<?php

namespace App\Livewire\Market\Component;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductItemFilter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        return view('livewire.market.component.product-item-filter', [
            'productos' => Product::paginate(9)
        ]);
    }
}
