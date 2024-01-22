<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;




Route::middleware('guest')->group(function () {
    Volt::route('register', 'auth.sign-up')
        ->name('register');

    Volt::route('login', 'auth.sign-in')
        ->name('login');

    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');
});



Route::middleware('auth')->group(function () {
    Volt::route('account', 'market.home')
        ->name('account');

    Route::get('/logout', function (Logout $logout) {

        $logout();


        return redirect('/');
    })->name('logout');

    Volt::route('verify-email', 'pages.auth.verify-email')
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Volt::route('confirm-password', 'pages.auth.confirm-password')
        ->name('password.confirm');
});
