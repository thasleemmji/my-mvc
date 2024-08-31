<?php

namespace Illuminate\Framework;

use Closure;

class Route
{
    public static function get(string $routeUrl, Closure|array $action): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            return;
        }

        self::on($routeUrl, $action);
    }

    public static function post(string $routeUrl, Closure|array $action): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        self::on($routeUrl, $action);
    }

    public static function on(string $routeUrl, array|Closure $action): void
    {
        $requestedURL = $_SERVER['REQUEST_URI'];

        if ($requestedURL === $routeUrl) {
            if ($action instanceof Closure) {
                call_user_func_array($action, []);
            } else {
                [$controller, $method] = $action;
                call_user_func_array([new $controller(), $method], [new Request()]);
            }
        }
    }
}
