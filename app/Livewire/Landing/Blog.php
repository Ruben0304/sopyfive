<?php

namespace App\Livewire\Landing;

use App\Models\Articulo;
use App\Models\Comunity;
use App\Models\Slider;
use Livewire\Component;

class Blog extends Component
{
    public $id;
    public Comunity $comunity;
    public $articles;

    public function mount($id = null)
    {

        $this->id = $id;
        $this->comunity = Comunity::find($id);
        $this->articles = $this->comunity->articles;


    }

    public function render()
    {
        return view('livewire.landing.blog');
    }
}
