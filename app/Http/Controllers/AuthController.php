<?php

namespace App\Http\Controllers;

use Illuminate\Framework\Request;
use Illuminate\Framework\View;

class AuthController
{
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
