<?php

namespace App\OOP\PHP;

abstract class Car
{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $gearBoxSystem;
    protected string $color;

    protected bool $turnedOn = false;
    private CarDashboard $dashboard;

    /**
     * @param int $speed
     * @param int $numberOfDoors
     * @param string $gearBoxSystem
     * @param string $color
     */
    public function __construct(int $speed, int $numberOfDoors, string $gearBoxSystem, string $color)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->gearBoxSystem = $gearBoxSystem;
        $this->color = $color;
    }

    public abstract function move(): int;

    public abstract function turnOn(): bool;

    public abstract function turnOff(): bool;

    public abstract function accelerate(int $speed): bool;

    public abstract function park(): bool;

    public function installDashboard(CarDashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    public function CarInfo(): string
    {
        if ($this->dashboard) {
            return "The speed is {$this->speed}\n more info ...\n {$this->dashboard->readDashboard()}";
        } else {
            return "This car does not has a dashboard";
        }
    }
}