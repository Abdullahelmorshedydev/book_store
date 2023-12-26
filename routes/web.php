<?php

use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\BranchController;
use App\Http\Controllers\Web\FavouriteController;
use App\Http\Controllers\Web\HomeController;
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

Route::get('/', HomeController::class)->name('index');

Route::get('/branches', BranchController::class)->name('branches.index');

Route::get('/about-us', AboutController::class)->name('about.index');

Route::controller(FavouriteController::class)->prefix('/favourites')->as('favourites.')->group(function () {

    Route::get('/', 'index')->name('index');
});

Route::controller(AuthController::class)->prefix('/auth')->as('auth.')->group(function () {

    Route::middleware('guest')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::post('/login', 'login')->name('login');
        Route::post('/register', 'register')->name('register');
    });

    Route::post('/logout', 'logout')->middleware('auth')->name('logout');
});
