<?php

use Illuminate\Framework\Redirect;
use Illuminate\Framework\View;

if (!function_exists('session'))
{
    function session(string $key, $default = null) {
        return $_SESSION[$key] ?? $default;
    }
}

if (!function_exists('view')) {
    function view(string $view, array $data = []): View
    {
        return View::make($view, $data);
    }
}

if (!function_exists('redirect')) {
    function redirect(string $url): Redirect
    {
        return Redirect::to($url);
    }
}
