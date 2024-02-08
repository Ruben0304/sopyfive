<?php

namespace App\Livewire\Actions;

use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class OAuth
{

    public static function iniciarConGoogle ():void {
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
            if (!User::where(['email' => $googleUser->getEmail()])->exists()) {
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
                back()->with('error','Email ya existe');
            }
        }
    }

    public static function iniciarConTwitter ():void {
        $twitterUser = Socialite::driver('twitter')->user();

        // Buscar el registro en la tabla social_accounts

        $socialAccount = SocialAccount::where([
            'provider' => 'twitter',
            'provider_id' => $twitterUser->getId(),
        ])->first();


        if ($socialAccount) {
            // Obtener el usuario asociado al registro
            $user = $socialAccount->user;
        } else {
            if (!User::where(['email' => $twitterUser->getEmail()])->exists()) {
                // Crear un usuario en la base de datos
                $user = User::create([
                    'name' => $twitterUser->getName(),
                    'email' => $twitterUser->getEmail(),
                ]);

                // Crear un registro en la tabla social_accounts
                $socialAccount = SocialAccount::create([
                    'provider' => 'twitter',
                    'provider_id' => $twitterUser->getId(),
                    'token' => $twitterUser->token,
                    'refresh_token' => $twitterUser->refreshToken,
                    'user_id' => $user->id,

                ]);

                // Iniciar sesión con el usuario
                Auth::login($user);
            }else{
                back()->with('error','Email ya existe');
            }
        }
    }

}
