<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\Branch\BranchController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Settings\FilesSettingsController;
use App\Http\Controllers\Admin\Settings\GeneralSettingsController;
use App\Http\Controllers\Admin\Settings\LinksSettingsController;
use App\Http\Controllers\Admin\Slider\SliderController;

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

// Admin Routes Where middleware guest (Not Authenticated)
Route::group(['prefix' => '/auth', 'middleware' => 'guest'], function () {

    Route::as('auth.')->group(function () {

        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::post('/login', [LoginController::class, 'store'])->name('login.store');

        Route::get('/register', [RegisterController::class, 'register'])->name('register');
        Route::post('/register', [RegisterController::class, 'store'])->name('store');

        Route::get('/forgetPassword', [ResetPasswordController::class, 'index'])->name('forget.index');
        Route::post('/forget-password/send', [ResetPasswordController::class, 'send'])->name('forget.send');

        Route::get('/reset-password/{email}', [ResetPasswordController::class, 'update'])->name('forget.update');
        Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('forget.reset');
    });
});

// Admin Routes Where middleware auth (Authenticated)
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('index');

    Route::resource('sliders', SliderController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('products', ProductController::class);

    Route::resource('branches', BranchController::class);

    Route::prefix('/settings')->as('settings.')->group(function () {

        Route::controller(GeneralSettingsController::class)->as('general.')->group(function () {

            Route::get('/general', 'index')->name('index');
            Route::put('/general', 'update')->name('update');
        });

        Route::controller(FilesSettingsController::class)->as('files.')->group(function () {

            Route::get('/files', 'index')->name('index');
            Route::put('/files', 'update')->name('update');
        });

        Route::controller(LinksSettingsController::class)->as('links.')->group(function () {

            Route::get('/links', 'index')->name('index');
            Route::put('/links', 'update')->name('update');
        });
    });

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});
