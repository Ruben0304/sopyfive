<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Content extends Component
{
    public $id;

    public function mount($id = null)
    {
        // Asignar el parámetro a la propiedad pública
        $this->id = $id;

    }

    public function render()
    {
        return view('livewire.landing.content');
    }
}
