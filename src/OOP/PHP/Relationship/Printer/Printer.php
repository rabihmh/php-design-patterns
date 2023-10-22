<?php

namespace App\OOP\PHP\Relationship\Printer;

abstract class Printer
{
    protected string $stringToBePrinted;

    /**
     * @param string $stringToBePrinted
     */
    public function setStringToBePrinted(string $stringToBePrinted): void
    {
        $this->stringToBePrinted = $stringToBePrinted;
    }

    abstract public function printToScreen(): string;
}