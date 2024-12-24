<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrafficController;
use App\Http\Controllers\UserController;

// get handler
Route::get('/', [TrafficController::class, 'index']);
Route::get('/login', [TrafficController::class, 'loginPage']);
Route::get('/register', [TrafficController::class, 'registerPage']);

// post handler
Route::post('/login', [UserController::class, 'loginHandler']);
Route::post('/register', [UserController::class, 'registerHandler']);
Route::post('/find', [TrafficController::class, 'findPlace']);

// admin
Route::get('/dashboard', [TrafficController::class, 'dashboard']);

// debug page
Route::get('/find', [TrafficController::class, 'findVisitation']);
Route::get('/detail', [TrafficController::class, 'getDetail']);
Route::get('/cart', [TrafficController::class, 'getCart']);