<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
});
