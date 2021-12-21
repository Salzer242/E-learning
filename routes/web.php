<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/CustomRegister', [App\Http\Controllers\AuthController::class, 'indexRegister'])->name('Custom.register');
Route::get('/CustomLogin', [App\Http\Controllers\AuthController::class, 'indexLogin'])->name('Custom.login');

Route::post('/formateurs', [App\Http\Controllers\FormateurController::class, 'index'])->name('formateurs');
Route::post('/CustomRegister', [App\Http\Controllers\AuthController::class, 'indexRegister'])->name('Custom.register');
Route::post('/CustomRegister', [App\Http\Controllers\AuthController::class, 'register'])->name('register.custom');

Route::post('/CustomLogin', [App\Http\Controllers\AuthController::class, 'indexLogin'])->name('Custom.login');
Route::post('/CustomLogin', [App\Http\Controllers\AuthController::class, 'login'])->name('login.custom');

