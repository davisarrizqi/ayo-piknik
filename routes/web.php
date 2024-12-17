<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrafficController;

Route::get('/', [TrafficController::class, 'index']);
Route::get('/login', [TrafficController::class, 'loginPage']);
Route::get('/register', [TrafficController::class, 'registerPage']);