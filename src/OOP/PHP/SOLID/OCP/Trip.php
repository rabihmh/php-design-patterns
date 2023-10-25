<?php

namespace App\OOP\PHP\SOLID\OCP;

class Trip
{
    private IVehicle $vehicle;
    private string $tripNumber;
    private int $tripPrice;
    private int $duration;

    /**
     * @param IVehicle $vehicle
     * @param string $tripNumber
     * @param int $tripPrice
     * @param int $duration
     */
    public function __construct(IVehicle $vehicle, string $tripNumber, int $tripPrice, int $duration)
    {
        $this->setVehicle($vehicle);
        $this->setTripNumber($tripNumber);
        $this->setTripPrice($tripPrice);
        $this->setDuration($duration);
    }

    public function getVehicle(): IVehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(IVehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }


    /**
     * @return string
     */
    public function getTripNumber(): string
    {
        return $this->tripNumber;
    }

    /**
     * @param string $tripNumber
     */
    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * @return int
     */
    public function getTripPrice(): int
    {
        return $this->tripPrice;
    }

    /**
     * @param int $tripPrice
     */
    public function setTripPrice(int $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function move()
    {
        $this->vehicle->move();
    }
}
