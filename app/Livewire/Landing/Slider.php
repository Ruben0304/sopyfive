<?php

namespace App\Livewire\Landing;

use App\Models\Slider as ModelsSlider;
use Livewire\Component;

class Slider extends Component
{
    public $sliders;



    public function mount()
    {
        $this->sliders = ModelsSlider::all();

    }

    public function render()
    {
        return view('livewire.landing.slider');
    }
}
