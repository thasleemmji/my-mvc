<?php

namespace App\Http\Requests;

use Illuminate\Framework\Request;

class RegisterRequest extends Request
{
    public function getName(): string
    {
        return $this->post('name', '');
    }
}
