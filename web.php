<?php

use App\Http\Controllers\HomeController;
use Illuminate\Framework\Route;
use Illuminate\Framework\View;

Route::get('/', function () {
    return View::make('home');
});

Route::get('/home', [HomeController::class, 'index']);


// 1. home -> base URL: GET
// 2. register:         POST
// 3. logout:           GET
