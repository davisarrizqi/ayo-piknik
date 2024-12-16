<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrafficController;

Route::get('/', [TrafficController::class, 'index']);