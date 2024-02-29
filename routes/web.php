<?php

use App\Livewire\Admin\AddArticle;
use App\Livewire\Admin\AddCategory;
use App\Livewire\Admin\AddProduct;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Encuesta;
use App\Livewire\Landing\About;
use App\Livewire\Landing\Blog;
use App\Livewire\Landing\BlogDetails;
use App\Livewire\Landing\Content;
use App\Livewire\Landing\TermsConditions;
use App\Livewire\Market\Cart;
use App\Livewire\Market\MarketHome;
use App\Livewire\Market\ProductInfo;
use App\Livewire\Market\Products;
use App\Livewire\Market\ShippingDetails;
use App\Livewire\Market\Stripe\StripeWebhookHandler;
use Illuminate\Support\Facades\Route;

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
Route::get('/blog/{id}', Blog::class)->name('comunidad');
Route::get('/blog_details/{id}', BlogDetails::class)->name('blog-details');
Route::get('/about', About::class)->name('about');
Route::get('/terms_conditions', TermsConditions::class)->name('terms-conditions');


Route::get('market/home', MarketHome::class)->name('market');
Route::get('market/products', Products::class)->name('productos');
Route::get('market/shipping-details', ShippingDetails::class)->name('shipping-details');
Route::get('market/cart', Cart::class)->name('cart');
Route::get('market/product/{producto}', ProductInfo::class)->name('product-info');
Route::get('market/search/{search}', Products::class)->name('search');


Route::get('admin', Dashboard::class)->name('admin');
Route::get('admin/nuevo-articulo', AddArticle::class)->name('add-article');
Route::get('admin/nuevo-producto', AddProduct::class)->name('add-product');
Route::get('admin/nueva-categoria', AddCategory::class)->name('add-category');


Route::view('/offline', 'vendor/laravelpwa/offline')->name('offline');
Route::post('stripe/webhook', StripeWebhookHandler::class)->name('stripe-order-succes');


require __DIR__ . '/auth.php';








