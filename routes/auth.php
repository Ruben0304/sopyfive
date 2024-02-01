<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Actions\Logout;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;




Route::middleware('guest')->group(function () {
   

    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');

    
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
