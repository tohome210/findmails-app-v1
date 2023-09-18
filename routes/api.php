<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaraveliaController;
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

// Route::get('payment', 'index')->name('index');
// Route::name('stripe.')
//     ->controller(LaraveliaController::class)
//     ->group(function () {
//         Route::get('payment', 'index')->name('index');
//         Route::post('payment', 'store')->name('store');
//     });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {



    return $request->user();
});
