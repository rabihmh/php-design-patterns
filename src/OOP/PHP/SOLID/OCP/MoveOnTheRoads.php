<?php

namespace App\OOP\PHP\SOLID\OCP;

class MoveOnTheRoads implements IMove
{
    public function move(): void
    {
        var_dump("I am moving on the road");
    }
}