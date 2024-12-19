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
