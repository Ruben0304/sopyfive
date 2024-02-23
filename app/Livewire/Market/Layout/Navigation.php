<?php

namespace App\Livewire\Market\Layout;



use App\Models\Comunity;
use Livewire\Component;


class Navigation extends Component
{

    public $comunities;

    public function mount()
    {
        $this->comunities = Comunity::all();
    }




    public function render()
    {
        return view('livewire.market.layout.navigation');
    }
}
