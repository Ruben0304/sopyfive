<?php

use App\Livewire\Actions\OAuth;
use App\Livewire\Actions\Logout;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


Route::middleware('guest')->group(function () {


    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');


});

//google login
Route::get('/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google-login');


Route::get('/google/callback', function () {
    OAuth::iniciarConGoogle();

    return redirect('/');
});


//twitter login
Route::get('/twitter/redirect', function () {
    return Socialite::driver('twitter')->redirect();
})->name('twitter-login');


Route::get('/twitter/callback', function () {
   OAuth::iniciarConTwitter();

    return redirect('/');
});







Route::middleware('auth')->group(function () {


    Route::get('/logout', function (Logout $logout) {

        $logout();


        return redirect('/');
    })->name('logout');


});
