<?php

namespace App\OOP\PHP\SOLID\SRP;

class Bus
{
    private int $busNumber;
    private int $numberOfPassengers;
    private string $color;
    private int $maxSpeed;
    private int $doors;
    private Driver $driver;
    private array $routes;

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
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMaxSpeed(): string
    {
        return $this->maxSpeed . " K/h";
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
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

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }


    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param Route $route
     * @return void
     */
    public function addRoute(Route $route)
    {
        $this->routes[] = $route;
    }

    /**
     * @return int
     */
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

    public function move()
    {
        foreach ($this->getRoutes() as $route) {
            var_dump("I am moving now from {$route->getSource()} to {$route->getDestination()} at maximum speed of {$this->getMaxSpeed()}");
            var_dump("The Driver is {$this->getDriver()->getName()}");
        }
    }
}