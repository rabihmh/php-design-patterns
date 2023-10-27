<?php

namespace App\OOP\PHP;

class TCPClient extends Client
{
    public int $portNumber;

    public function __construct(string $source, int $timeout, int $portNumber)
    {
        parent::__construct($source, $timeout);
        $this->portNumber = $portNumber;
    }
}