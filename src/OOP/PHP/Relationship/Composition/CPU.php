<?php

namespace App\OOP\PHP\Relationship\Composition;

class CPU
{
    private float $speed;

    /**
     * @param float $speed
     */
    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

}