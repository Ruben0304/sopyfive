<?php

namespace App\Livewire\Landing;

use App\Models\Articulo;
use Livewire\Component;

class BlogDetails extends Component
{
    public Articulo $article;
    public  $similar;
    public function mount(int $id)
    {
        $this->article=Articulo::find($id);
        $this->similar = $this->article->comunity->articles()->take(4)->get();

    }
    public function render()
    {
        return view('livewire.landing.blog-details');
    }
}
