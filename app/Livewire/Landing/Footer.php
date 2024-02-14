<?php

namespace App\Livewire\Landing;

use App\Models\Comunity;
use Livewire\Component;

class Footer extends Component
{
    public $comunidades;

    public function mount()
    {
        $this->comunidades = Comunity::all();
    }
    public function render()
    {
        return view('livewire.landing.footer');
    }
}
