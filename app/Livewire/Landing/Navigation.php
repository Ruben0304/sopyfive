<?php

namespace App\Livewire\Landing;

use App\Livewire\Actions\Logout;
use App\Models\Comunity;
use Livewire\Component;

class Navigation extends Component
{
    public $comunidades;

    public function mount()
    {
        $this->comunidades = Comunity::all();
    }

    public function logout() :void
    {
        Logout::logout();
        $this->redirect(route('home'));
    }
    public function render()
    {
        return view('livewire.landing.navigation');
    }
}
