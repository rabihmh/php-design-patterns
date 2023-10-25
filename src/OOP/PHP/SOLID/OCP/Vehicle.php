<?php

namespace App\OOP\PHP\SOLID\OCP;

abstract class Vehicle implements IVehicle
{
    private IMove $movable;
    private string $color;
    private int $maxSpeed;
    private Driver $driver;
    private array $routes = [];

    public function getMovable(): IMove
    {
        return $this->movable;
    }

    public function setMovable(IMove $movable): void
    {
        $this->movable = $movable;
    }

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

    public function getDriver(): Driver
    {
        return $this->driver;
    }

    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }

    public function addRoute(Route $route): void
    {
        $this->routes[] = $route;
    }

    public function move(): void
    {
        $this->getMovable()->move();
    }

}