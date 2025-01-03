<?php

use App\Models\Payments\Doku;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\TrafficController;

// get handler
Route::get('/', [TrafficController::class, 'index']);
Route::get('/login', [TrafficController::class, 'loginPage']);
Route::get('/register', [TrafficController::class, 'registerPage']);

// post handler
Route::post('/login', [UserController::class, 'loginHandler']);
Route::post('/register', [UserController::class, 'registerHandler']);
Route::post('/find', [TrafficController::class, 'findPlace']);
Route::post('/get', [TrafficController::class, 'getLastFind']);

// admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'redirect']);
    Route::get('/dashboard', [AdminController::class, 'dashboardPage']);
    Route::get('/login', [AdminController::class, 'loginPage']);
    Route::get('/logout', [AdminController::class, 'logoutHandler']);
    Route::get('/add', [AdminController::class, 'addPage']);
    Route::get('/update', [AdminController::class, 'updatePage']);
    Route::get('/preview', [AdminController::class, 'findPage']);
    Route::get('/preview/{slug}', [AdminController::class, 'dashboardPage']);
    
    Route::post('/login', [AdminController::class, 'loginHandler']);
    Route::post('/add', [AdminController::class, 'addHandler']);
    Route::post('/update', [AdminController::class, 'dashboardPage']);
});

// added page
Route::get('/find', [TrafficController::class, 'findLastPlace']);
Route::get('/detail/{place}', [PlaceController::class, 'getPlace']);
Route::get('/cart', [UserController::class, 'getCart']);
Route::get('/profile', [UserController::class, 'getProfile']);
Route::post('/profile', [UserController::class, 'updateHandler']);
Route::get('/history', [UserController::class, 'getHistory']);
Route::get('/refund', [UserController::class, 'getRefund']);
Route::get('/logout', [UserController::class, 'logoutHandler']);
Route::get('/booking/{slug}', [UserController::class, 'bookingPlace']);

// Booking Request
Route::post('/request-booking', [UserController::class, 'sendBookingRequest']);

// Payment Gateway
Route::post('/checkout', [Doku::class, 'createPayment']);
Route::post('/checkout/signature', [Doku::class, 'generateSignature']);
Route::get('/checkout/status', [Doku::class, 'getPaymentStatus']);
Route::get('/cart/{invoice_number}', [UserController::class, 'validatePayment']);