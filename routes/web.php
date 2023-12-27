<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\BranchController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\FavouriteController;
use App\Http\Controllers\Web\ReturnPolicyController;
use App\Http\Controllers\Web\PrivacyPolicyController;

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

Route::controller(ContactController::class)->prefix('/contact')->as('contact.')->group(function () {

    Route::get('/', 'index')->name('index');
    Route::post('/store', 'store')->name('store');
});

Route::controller(FavouriteController::class)->middleware('check.auth.login')->prefix('/favourites')->as('favourites.')->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/store/{id}', 'store')->name('store');
    Route::get('/delete/{id}', 'delete')->name('delete');
});

Route::controller(AuthController::class)->prefix('/auth')->as('auth.')->group(function () {

    Route::middleware('guest')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::post('/login', 'login')->name('login');
        Route::post('/register', 'register')->name('register');
    });

    Route::post('/logout', 'logout')->middleware('auth')->name('logout');
});

Route::controller(CartController::class)->prefix('/cart')->as('cart.')->group(function () {

    Route::post('/create', 'create')->name('create');
});

Route::get('/privacy_policy', PrivacyPolicyController::class)->name('privacy_policy');

Route::get('/return-policy', ReturnPolicyController::class)->name('return_policy');

Route::controller(ProductController::class)->prefix('/shop')->as('products.')->group(function () {

    Route::get('/all', 'all')->name('all');
    Route::get('/category/{id}', 'categoryProducts')->name('category_products');
    Route::get('/single/{product}', 'singleProduct')->name('single_product');
});
