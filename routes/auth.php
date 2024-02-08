<?php

use App\Livewire\Actions\GoogleCallback;
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


Route::get('/google/callback', function (GoogleCallback $callback) {
    $callback();

    return redirect('/');
});


Route::middleware('auth')->group(function () {


    Route::get('/logout', function (Logout $logout) {

        $logout();


        return redirect('/');
    })->name('logout');


});
