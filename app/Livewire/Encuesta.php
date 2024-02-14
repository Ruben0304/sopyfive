<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
class Encuesta extends Component
{

    public function render()
    {
        return view('livewire.encuesta')->layout('layouts.encuesta');
    }
}
