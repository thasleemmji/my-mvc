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

        return Redirect::to('');
    }

    public function logout(): Redirect
    {
        session_destroy();

        return Redirect::to('');
    }
}
