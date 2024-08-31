<?php

use App\Http\Controllers\HomeController;
use Illuminate\Framework\Route;
use Illuminate\Framework\View;

Route::get('/', function () {
    return View::make('home', ['name' => $_SESSION['name'] ?? null]);
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('/register', [HomeController::class, 'register']);

Route::get('/logout', [HomeController::class, 'logout']);
