<?php

use App\Http\Controllers\AuthController;
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

Route::middleware('auth')->group( function () {
    Route::get('/home', [HomeController::class,'home'])->name('home');
    Route::get('/profile', [UserController::class,'index'])->name('profile');
    Route::delete('/logout',[AuthController::class,'logout'])->name('logout');
});
