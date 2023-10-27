<?php

namespace App\OOP\PHP;

class CarDashboard
{
    protected int $oilLevel;
    protected int $fuelLevel;
    protected int $airPressure;

    /**
     * @return int
     */
    private function getOilLevel(): int
    {
        return $this->oilLevel;
    }

    /**
     * @return int
     */
    private function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    /**
     * @return int
     */
    private function getAirPressure(): int
    {
        return $this->airPressure;
    }

    public function readDashboard(): string
    {
        return "Showing the following analysis : \n
        Fuel:{$this->getFuelLevel()};
        Oil:{$this->getOilLevel()};
        Air Pressure:{$this->getAirPressure()};";
    }

}