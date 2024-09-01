<?php

namespace App\Http\Controllers;

use Illuminate\Framework\Redirect;
use Illuminate\Framework\Request;

class AuthController
{
    public function register(Request $request): Redirect
    {
        if (!empty($name = $request->post('name'))) {
            $_SESSION['name'] = $name;
        }

        return redirect('');
    }

    public function logout(): Redirect
    {
        session_destroy();

        return redirect('');
    }
}
