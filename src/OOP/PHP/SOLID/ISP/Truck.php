<?php

namespace App\OOP\PHP\SOLID\ISP;

class Truck implements Vehicle, Heavy
{

    public function move(): void
    {
        echo 'I am moving';
    }


    public function stop(): void
    {
        echo 'Stopping....';
    }

    public function carryHeavyCargo(): void
    {
        echo 'Carrying a cargo that weighs 2000kg';
    }
}