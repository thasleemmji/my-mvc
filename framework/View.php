<?php

namespace Illuminate\Framework;

class View
{
    private function __construct(string $view, array $data = [])
    {
        ob_start();

        // Eg: $data = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
        extract($data);

        include __DIR__."/../views/{$view}.php";

        print_r(ob_get_clean());
    }


    public static function make(string $view, array $params = []): self
    {
        return new self($view, $params);
    }
}
