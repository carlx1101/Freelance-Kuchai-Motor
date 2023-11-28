<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SalesmanController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\SubCategoryController;

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
Route::get('/about-us', [PageController::class, 'contact'])->name('about.us');
Route::get('/new-motors', [PageController::class, 'newMotors'])->name('new.motors');
Route::get('/used-motors', [PageController::class, 'usedMotors'])->name('used.motors');


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
    Route::resource('salesman', SalesmanController::class)->only(['index', 'store', 'update', 'destroy']);

    // Manage Motorcycles
    Route::resource('/motorcycles', MotorcycleController::class);

    // Manage Accessories
    Route::resource('/accessories', AccessoryController::class);


    // Manage Booking
    Route::resource('/bookings', BookingController::class);

    // Categories
    Route::resource('/categories', CategoryController::class);

    // Subcategories
    Route::resource('/subcategories', SubCategoryController::class);

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'user-access:salesman'
])->prefix('salesman')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'salesmanHome'])->name('salesman.dashboard');
});
