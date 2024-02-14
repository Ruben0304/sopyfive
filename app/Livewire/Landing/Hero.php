<?php

namespace App\Livewire\Landing;

use App\Models\Comunity;
use Livewire\Component;
use \App\Models\Slider;

class Hero extends Component
{

    public $title;
    public $paragraph;

    public function mount(int $id)
    {
        $slider = Comunity::find($id)->slider;
        $this->title = $slider->title;
        $this->paragraph = $slider->paragraph;

    }

    public function render()
    {
        return view('livewire.landing.hero');
    }
}
