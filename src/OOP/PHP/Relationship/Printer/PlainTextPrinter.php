<?php

namespace App\OOP\PHP\Relationship\Printer;

class PlainTextPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "this is a plaint text format of the string {$this->stringToBePrinted}";
    }
}