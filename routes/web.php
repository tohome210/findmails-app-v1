<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FindersearchController;
use App\Http\Controllers\DomainsearchController;
use App\Http\Controllers\Bulkfinder2Controller;
use App\Http\Controllers\Bulkfinder1Controller;
use App\Http\Controllers\LaraveliaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(('auth'))->group(function () {

    Route::name('stripe.')
        ->controller(LaraveliaController::class)
        ->group(function () {
            Route::get('payment/index', 'index')->name('index');
            Route::get('payment/credit', 'credit')->name('credit');
            Route::post('payment', 'store')->name('store');
        });

    Route::get('/findersearch', [FindersearchController::class, 'show'])->name('findersearch.show');
    Route::get('/findersearch/history', [FindersearchController::class, 'history'])->name('findersearch.history');
    Route::get('/findersearch/create', [FindersearchController::class, 'create'])->name('findersearch.create');

    Route::get('/domainsearch', [DomainsearchController::class, 'show'])->name('domainsearch.show');
    Route::get('/domainsearch/history', [DomainsearchController::class, 'history'])->name('domainsearch.history');
    Route::get('/domainsearch/create', [DomainsearchController::class, 'create'])->name('domainsearch.create');

    Route::get('/bulkfinder2', [Bulkfinder2Controller::class, 'show'])->name('bulkfinder2.show');
    Route::get('/bulkfinder2/history', [Bulkfinder2Controller::class, 'history'])->name('bulkfinder2.history');
    Route::get('/bulkfinder2/history/{id}', [Bulkfinder2Controller::class, 'getById'])->name('bulkfinder2.getById');
    Route::post('/bulkfinder2/create', [Bulkfinder2Controller::class, 'create'])->name('bulkfinder2.create');

    Route::get('/bulkfinder1', [Bulkfinder1Controller::class, 'show'])->name('bulkfinder1.show');
    Route::get('/bulkfinder1/history', [Bulkfinder1Controller::class, 'history'])->name('bulkfinder1.history');
    Route::get('/bulkfinder1/history/{id}', [Bulkfinder1Controller::class, 'getById'])->name('bulkfinder1.getById');
    Route::post('/bulkfinder1/create', [Bulkfinder1Controller::class, 'create'])->name('bulkfinder1.create');



    // Route::get('/bulkverif2', function () {
    //     return view('pages.bulkverif2', ['pageTitle' => 'bulkverif2']);
    // })->name('bulkverif2');
    Route::get('/bulktasks', function () {
        return view('pages.bulktasks', ['pageTitle' => 'bulktasks']);
    })->name('bulktasks');

    Route::get('/leads', function () {
        return view('pages.leads', ['pageTitle' => 'leads']);
    })->name('leads');
    Route::get('/campaign2', function () {
        return view('pages.campaign2', ['pageTitle' => 'campaign2']);
    })->name('campaign2');
    Route::get('/settings', function () {
        return view('pages.settings', ['pageTitle' => 'settings']);
    })->name('settings');
    Route::get('/singleemail', function () {
        return view('pages.singleemail', ['pageTitle' => 'singleemail']);
    })->name('singleemail');
});
Route::get('/test', function () {
    return view('pages.test', ['pageTitle' => 'test']);
})->name('test');

Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
