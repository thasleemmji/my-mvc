<?php

namespace App\Http\Controllers;

use Illuminate\Framework\Request;
use Illuminate\Framework\View;

class HomeController
{
    public function index(): View
    {
        return View::make('home', [
            'name' => $_SESSION['name'] ?? null
        ]);
    }

    public function register(Request $request)
    {
        if (!empty($name = $request->post('name'))) {
            $_SESSION['name'] = $name;
        }

        header("Location: /home");
        exit();
    }

    public function logout()
    {
        session_destroy();

        header("Location: /home");
        exit();
    }
}
