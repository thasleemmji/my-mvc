<?php

namespace Illuminate\Framework;

class Redirect
{
    private function __construct(string $url)
    {
        header("Location: /$url");
        exit();
    }

    public static function to(string $url): self
    {
        return new self($url);
    }
}
