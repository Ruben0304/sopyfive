<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'landing')->name('home');


Volt::route('mercado', 'market.home')
    ->name('mercado');

Volt::route('mercado/productos', 'market.products')
    ->name('productos');

Volt::route('mercado/detalles', 'market.product-info')
    ->name('product-info');

Volt::route('mercado/carrito', 'market.cart')
    ->name('cart');




Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



require __DIR__ . '/auth.php';
