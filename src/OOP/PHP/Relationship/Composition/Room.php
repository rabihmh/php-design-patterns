<?php

namespace App\OOP\PHP\Relationship\Composition;

class Room
{
private string $color;
private int $size;

    /**
     * @param string $color
     * @param int $size
     */
    public function __construct(string $color, int $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

}