<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

});


