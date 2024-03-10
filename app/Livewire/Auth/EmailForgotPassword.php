<?php

namespace App\Livewire\Auth;

use App\Mail\ResetPassword;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EmailForgotPassword extends Component
{
    #[Rule(['required', 'string' ,'email', 'exists:users,email'])]
    public string $email;
    public function send()
    {

        $correo = new ResetPassword("jnjnjnjnjnjnjn", $this->email);

        Mail::to($this->email)->send($correo);
    }
    public function render()
    {
        return view('livewire.auth.email-forgot-password')->layout('layouts.auth');
    }
}
