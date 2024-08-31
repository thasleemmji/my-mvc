<?php

use App\Http\Controllers\AuthController;
use Illuminate\Framework\Route;
use Illuminate\Framework\View;

Route::get('/', function () {
    return View::make('home', ['name' => $_SESSION['name'] ?? null]);
});

Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);
