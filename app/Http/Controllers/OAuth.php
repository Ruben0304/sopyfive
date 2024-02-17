<?php

namespace App\Http\Controllers;

use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class OAuth extends Controller
{
    public static function handleGoogleOneTap(Request $request): void {
        $token = $request->input('credential');
        $googleUser = Socialite::driver('google-one-tap')->stateless()->userFromToken($token);

        // Buscar el registro en la tabla social_accounts
        $socialAccount = SocialAccount::where([
            'provider' => 'google',
            'provider_id' => $googleUser->getId(),
        ])->first();

        if ($socialAccount) {
            // Obtener el usuario asociado al registro
            $user = $socialAccount->user;
            Auth::login($user);
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
            } else {
                back()->with('error', 'Email ya existe');
            }
        }
    }
}
