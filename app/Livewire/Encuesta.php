<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
class Encuesta extends Component
{
    #[Layout('layouts.encuesta')]
    public function render()
    {
        return view('livewire.encuesta');
    }
}
