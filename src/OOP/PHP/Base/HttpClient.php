<?php

namespace App\OOP\PHP\Base;

class HttpClient extends Client
{
    public function __construct(string $source, int $timeout)
    {
        parent::__construct($source, $timeout);
    }

    public function welcomeAfterConnect(): string
    {
        return "{$this->connect()} an extra welcome message to {$this->source}";
    }
}