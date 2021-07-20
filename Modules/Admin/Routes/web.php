<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', 'AdminController@index');

    Route::get('/login', [LoginController::class, 'showAdminLoginForm'])->name('login');
    Route::get('/register', [RegisterController::class, 'showAdminRegisterForm'])->name('register');

    Route::post('/login', [LoginController::class, 'adminLogin']);
    Route::post('/register', [RegisterController::class, 'createAdmin']);

    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showAdminResetForm'])->name('password.reset');
    Route::get('/password/reset/', [ForgotPasswordController::class, 'showAdminLinkRequestForm'])->name('password.request');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendAdminResetLinkEmail'])->name('password.email');
    Route::post('/password/reset', [ResetPasswordController::class, 'resetAdmin'])->name('password.update');

});
