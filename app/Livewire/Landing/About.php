<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Livewire\Attributes\Layout;

class About extends Component
{
    #[Layout('layouts.landing')]
    public function render()
    {
        return view('livewire.landing.about');
    }
}
