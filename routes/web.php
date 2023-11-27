<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SalesmanController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\MotorcycleController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'user-access:customer'
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'customerHome'])->name('dashboard');

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'user-access:admin'
])->prefix('admin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');

    // Manage Salesman
    Route::resource('salesman', SalesmanController::class);

    // Manage Motorcycles
    Route::resource('/motorcycles', MotorcycleController::class);

    // Manage Accessories
    Route::resource('/accessories', AccessoryController::class);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'user-access:salesman'
])->prefix('salesman')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'salesmanHome'])->name('salesman.dashboard');

});


