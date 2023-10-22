<?php

namespace App\OOP\PHP;

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