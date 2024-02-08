<?php

namespace App\Livewire\Actions;

use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleCallback
{
    public function __invoke()
    {
        $googleUser = Socialite::driver('google')->user();

        // Buscar el registro en la tabla social_accounts

        $socialAccount = SocialAccount::where([
            'provider' => 'google',
            'provider_id' => $googleUser->getId(),
        ])->first();


        if ($socialAccount) {
            // Obtener el usuario asociado al registro
            $user = $socialAccount->user;
        } else {
            if (!User::where('email',$googleUser->getEmail())->exist()) {
                // Crear un usuario en la base de datos
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                ]);

                // Crear un registro en la tabla social_accounts
                $socialAccount = SocialAccount::create([
                    'provider' => 'google',
                    'provider_id' => $googleUser->getId(),
                    'token' => $googleUser->token,
                    'refresh_token' => $googleUser->refreshToken,
                    'user_id' => $user->id,

                ]);

                // Iniciar sesión con el usuario
                Auth::login($user);
            }else{
                return back()->with('error','Email ya existe');
            }
        }

    }

}
