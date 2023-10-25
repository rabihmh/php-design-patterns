<?php

namespace App\OOP\PHP\SOLID\OCP;

class MoveOverWaves implements IMove
{
    public function move(): void
    {
        var_dump("I am floating over the waves");
    }
}