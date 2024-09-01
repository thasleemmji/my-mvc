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
                $controllerInstance = new $controller;
                call_user_func_array(
                    [$controllerInstance, $method],
                    [self::resolveRequest($controllerInstance, $method)]
                );
            }
        }
    }

    private static function resolveRequest(object $controllerInstance, string $method): Request
    {
        try {
            $reflector = new \ReflectionMethod($controllerInstance, $method);
            foreach ($reflector->getParameters() as $parameter) {
                if (in_array(
                    Request::class,
                    class_parents($customRequestClass = $parameter->getType()->getName()))
                ) {
                    return new $customRequestClass;
                }
            }
        } catch (\Exception) {}

        return new Request();
    }
}
