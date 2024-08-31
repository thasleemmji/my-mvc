<?php

use App\Http\Controllers\HomeController;
use Illuminate\Framework\Route;
use Illuminate\Framework\View;

Route::get('/', function () {
    return View::make('home');
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('/register', [HomeController::class, 'register']);

// 2. register:         POST
// 3. logout:           GET
