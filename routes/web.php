<?php

use App\Livewire\Encuesta;
use App\Livewire\Landing\About;
use App\Livewire\Landing\Content;
use App\Livewire\Market\Cart;
use App\Livewire\Market\MarketHome;
use App\Livewire\Market\ProductInfo;
use App\Livewire\Market\Products;
use App\Livewire\Market\ShippingDetails;
use App\Livewire\Market\Stripe\StripeWebhookHandler;
use App\Models\SocialAccount;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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


// Route::view('market/add-product', AddProduct::class);

// Volt::route('mercado/add-product', 'market.add-product')
//     ->name('add-product');

// Volt::route('mercado', 'market.home')
//     ->name('mercado');


// Volt::route('mercado/detalles', 'market.product-info')
//     ->name('product-info');

Route::get('/encuesta', Encuesta::class)->name('encuesta');

Route::get('/', Content::class)->name('home');
Route::get('/about', About::class)->name('about');

Route::get('market/home', MarketHome::class)->name('mercado');
Route::get('market/products', Products::class)->name('productos');
Route::get('market/shipping-details', ShippingDetails::class)->name('shipping-details');
Route::get('market/cart', Cart::class)->name('cart');
Route::get('market/product/{producto}', ProductInfo::class)->name('product-info');

Route::view('/offline', 'vendor/laravelpwa/offline')->name('offline');
Route::post('stripe/webhook', StripeWebhookHandler::class)->name('stripe-order-succes');





Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


require __DIR__ . '/auth.php';
