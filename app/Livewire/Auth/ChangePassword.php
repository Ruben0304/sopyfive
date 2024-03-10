<?php

namespace App\Livewire\Auth;

use App\Mail\ResetPassword;
use App\Mails\InfoSopyfiveMail;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ChangePassword extends Component
{
    #[Rule(['required', 'string'])]
    public $token;

    #[Rule(['required', 'string' ,'email', 'exists:users,email'])]
    public $email;
    public function mount($token,$email)
    {
       $this->token=$token;
       $this->email=$email;


    }
    public function render()
    {
        return view('livewire.auth.change-password')->layout('layouts.auth');
    }
}
