<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\V1\ArticuloController;
use App\Http\Controllers\API\V1\CartController;
use App\Http\Controllers\API\V1\ComunityController;
use App\Http\Controllers\API\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function () {
    Route::apiResource('comunity', ComunityController::class);
    Route::apiResource('article', ArticuloController::class)->middleware('auth:sanctum');
    Route::apiResource('product', ProductController::class);
    Route::apiResource('cart', CartController::class)->middleware('auth:sanctum');
    //Route::post('article', [ArticuloController::class, 'store'])->middleware('auth:sanctum');

});


// Ruta para registrar un nuevo usuario
Route::post('register', [AuthController::class, 'register']);

// Ruta para iniciar sesión de un usuario
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


