<?php

namespace App\OOP\PHP\Relationship\Printer;

class HTMLPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "<h1>this is an html format of the string {$this->stringToBePrinted}</h1>";
    }
}