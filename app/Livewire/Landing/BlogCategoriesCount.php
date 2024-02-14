<?php

namespace App\Livewire\Landing;

use App\Models\Comunity;
use Livewire\Component;

class BlogCategoriesCount extends Component
{
    public $comunities;

    public function mount()
    {
        $this->comunities=Comunity::all();
    }
    public function render()
    {
        return view('livewire.landing.blog-categories-count');
    }
}
