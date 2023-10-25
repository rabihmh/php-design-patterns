<?php

namespace App\OOP\PHP\SOLID\OCP;

class Bus extends Vehicle
{
    private int $busNumber;
    private int $numberOfPassengers;
    private int $doors;

    /**
     * @param int $busNumber
     */
    public function __construct(int $busNumber)
    {
        $this->setBusNumber($busNumber);
    }

    /**
     * @return int
     */
    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    /**
     * @param int $numberOfPassengers
     */
    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }


    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @param $from
     * @param $to
     * @return string
     */
    public function driveToRoute($from, $to): string
    {
        return "The bus is moving from {$from} to {$to}";
    }

    /**
     * @return string
     */
    public function doMaintenance(): string
    {
        return "The bus is doing maintenance right now";
    }



}