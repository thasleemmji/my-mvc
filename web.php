<?php

use App\Http\Controllers\AuthController;
use Illuminate\Framework\Route;
use Illuminate\Framework\View;

Route::get('/', function () {
    return view('home', ['name' => session('name')]);
});

Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);
