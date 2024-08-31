<?php

namespace App\Http\Controllers;

use Illuminate\Framework\View;

class HomeController
{
    public function index(): View
    {
        return View::make('home');
    }

    public function register(Request $request)
    {

    }
}
