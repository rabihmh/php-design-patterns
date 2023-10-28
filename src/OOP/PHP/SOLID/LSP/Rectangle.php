<?php

namespace App\OOP\PHP\SOLID\LSP;

/**
 *
 */
class Rectangle implements Shape
{
    protected int $width;
    protected int $height;

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function calculateArea(): int
    {
        return $this->getWidth() * $this->getHeight();
    }
}