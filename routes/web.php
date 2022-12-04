<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
     return redirect () -> route('indexProduct');
 });

// Register Route
Route::get('/register', [RegisterController::class, 'createRegister'])->name('createRegister');
Route::post('/register', [RegisterController::class,'storeRegister'])->name('storeRegister');

// Login Route
Route::get('/login', [LoginController::class, 'createLogin'])->name('createLogin')->middleware('guest');
Route::post('/login', [LoginController::class,'storeLogin'])->name('storeLogin');

// Logout Route
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Products Route
Route::get('/dashboard', [ProductController::class, 'indexProduct'])->name('indexProduct')->middleware('auth');

Route::get('/create', [ProductController::class,'createProduct'])->name('createProduct')->middleware('auth');
Route::post('/create', [ProductController::class,'storeProduct'])->name('storeProduct')->middleware('auth');

Route::get('/edit/{id}', [ProductController::class,'editProduct'])->name('editProduct')->middleware('auth');
Route::post('/edit/{id}', [ProductController::class,'updateProduct'])->name('updateProduct')->middleware('auth');

Route::post('/delete/{id}', [ProductController::class,'destroyProduct'])->name('destroyProduct')->middleware('auth');