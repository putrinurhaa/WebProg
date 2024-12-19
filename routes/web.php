<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'redirect']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/products', [ProductController::class, 'index'])->name('products');
//Route::get('/products/{id}', [ProductController::class, 'detail']);
Route::post('/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
//Route::get('/articles/{id}', [ArticleController::class, 'detail']);
Route::post('/articles', [ArticleController::class, 'store'])->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'handleLogin'])->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'handleRegister'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
