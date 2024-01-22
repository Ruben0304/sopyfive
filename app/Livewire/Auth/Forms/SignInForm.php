<?php

namespace App\Livewire\Auth\Forms;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SignInForm extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirect(
            session('url.intended', route('mercado')),
            navigate: true
        );
    }
    public function render()
    {
        return view('livewire.auth.forms.sign-in-form');
    }
}
