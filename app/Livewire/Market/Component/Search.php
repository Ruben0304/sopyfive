<?php

namespace App\Livewire\Market\Component;

use Livewire\Component;

class Search extends Component
{
    public $text = "";

    public function search()
    {

    }
    public function render()
    {
        return view('livewire.market.component.search');
    }
}
