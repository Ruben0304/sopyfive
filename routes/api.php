<?php

use App\Livewire\Market\Stripe\StripeWebhookHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\ComunityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function() {
    Route::apiResource('comunity', ComunityController::class)->middleware('auth:sanctum');
});




// Ruta para registrar un nuevo usuario
Route::post('register', [\App\Http\Controllers\API\AuthController::class, 'register']);

// Ruta para iniciar sesión de un usuario
Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


