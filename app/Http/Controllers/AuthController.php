<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Framework\Redirect;

class AuthController
{
    public function register(RegisterRequest $request): Redirect
    {
        if (!empty($name = $request->getName())) {
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
