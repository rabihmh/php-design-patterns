<?php

namespace App\OOP\PHP;

class Mercedes extends Car
{

    public function move(): int
    {
        //2 operations before moving on
        return $this->speed;
    }

    public function turnOn(): bool
    {
        //2 operations before turning on
        $this->turnedOn = true;
        return true;
    }

    public function turnOff(): bool
    {
        //2 operations before turning on
        $this->turnedOn = false;
        return true;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed *0.5;
        return true;
    }

    public function park(): bool
    {
        //1 operations before parking
        return true;
    }
}