<?php

use App\Http\Controllers\HomeController;
use Illuminate\Framework\Route;

Route::get('/', function () {
    echo "we are in base url"; exit;
});

Route::get('/home', [HomeController::class, 'index']);


// 1. home -> base URL: GET
// 2. register:         POST
// 3. logout:           GET
