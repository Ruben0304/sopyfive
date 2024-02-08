<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use \App\Models\Slider;

class Hero extends Component
{

    public $title;
    public $paragraph;

    public function mount(int $id)
    {
        $slider = Slider::find($id);
        $this->title = $slider->title;
        $this->paragraph = $slider->paragraph;

    }

    public function render()
    {
        return view('livewire.landing.hero');
    }
}
