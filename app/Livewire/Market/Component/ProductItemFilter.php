<?php

namespace App\Livewire\Market\Component;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductItemFilter extends Component
{
    use WithPagination;
    protected $paginationTheme = 'tailwind';

    public string $search;


    public function mount($search = "")
    {
        $this->search = $search;


    }

    public function render()
    {
        return view('livewire.market.component.product-item-filter', [
            'productos' => $this->search != "" ? Product::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->paginate(9) : Product::paginate(9)
        ]);
    }
}
