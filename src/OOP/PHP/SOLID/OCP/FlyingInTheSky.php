<?php

namespace App\OOP\PHP\SOLID\OCP;

class FlyingInTheSky implements IMove
{
    public function move(): void
    {
        var_dump("I am flying in the sky");
    }
}