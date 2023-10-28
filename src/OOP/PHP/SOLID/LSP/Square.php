<?php

namespace App\OOP\PHP\SOLID\LSP;

class Square extends Rectangle
{
    protected int $side;

    public function getSide(): int
    {
        return $this->side;
    }

    public function setSide(int $side): void
    {
        $this->side = $side;
    }

    public function calculateArea(): int
    {
        return $this->getSide() * $this->getSide();
    }


}