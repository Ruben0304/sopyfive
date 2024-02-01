<?php

namespace App\Livewire\Auth;


use App\Livewire\Forms\RegisterForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Attributes\Layout;


class Register extends Component
{
    public RegisterForm $form;

    
    public function register(): void
    {

        $this->form->register();


        $this->redirect(
            session('url.intended', route('home'))
        );
    }

    #[Layout('layouts.auth')]
    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.auth');
    }
}