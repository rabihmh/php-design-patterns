<?php

namespace App\OOP\PHP\Base;

class Client
{
    protected string $source;
    protected int $timeout;

    /**
     * @param string $source
     * @param int $timeout
     */
    public function __construct(string $source, int $timeout)
    {
        $this->source = $source;
        $this->timeout = $timeout;
    }

    public function connect(): string
    {
        return "I am connecting to {$this->source}";
    }

    public function call(string $path): string
    {
        return "I have fetched this data for you :{$path}";
    }

    public function terminate(): bool
    {
        return true;
    }
}