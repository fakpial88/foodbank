<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\OrderController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/foods', [FoodController::class, 'index']);
Route::get('/foods/{id}', [FoodController::class, 'show']);
Route::get('/donations', [DonationController::class, 'index']);
Route::post('/donations', [DonationController::class, 'store']);
Route::get('/orders', [OrderController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::get('/login', [HomeController::class, 'login']);

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pencarian', function () {
    return view('pencarian');
});

Route::get('/donasiorang', function () {
    return view('donasiorang');
});

Route::get('/detailmakanan', function () {
    return view('detail');
});