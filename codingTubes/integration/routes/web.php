<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/',[HomeController::class,'landingPage'])->name('landingPage');

Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'login']);
Route::get('/register',[AuthController::class,'formRegister'])->name('formRegister');
Route::get('/shop',[HomeController::class,'shop'])->name('shop');
Route::get('/view',[HomeController::class,'view'])->name('view');
Route::get('/cart',[HomeController::class,'cart'])->name('cart');
Route::get('/checkout',[HomeController::class,'checkout'])->name('checkout');
Route::get('/order',[HomeController::class,'order'])->name('order');

Route::middleware('auth')->group( function () {
    Route::get('/home', [HomeController::class,'home'])->name('home');
    Route::delete('/logout',[AuthController::class,'logout'])->name('logout');
});
