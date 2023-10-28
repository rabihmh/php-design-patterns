<?php

namespace App\OOP\PHP\Base;

class Microwave
{
    protected int $temp;
    protected string $program;
    protected int $time;
    protected bool $status = false;

    /**
     * @param int $temp
     * @param string $program
     * @param int $time
     */
    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function turnOn(): bool
    {
        $this->status = true;
        return true;
    }

    public function turnOff(): bool
    {
        $this->status = false;
        return true;
    }

    public function deFreeze(): string
    {
        $this->turnOnMicrowaveHeatingSystem();
        $this->setTimer();
        $this->loadingDeFreezingProgram();
        return "I am de-freezing the food at {$this->temp} using the program {$this->program}";
    }

    private function turnOnMicrowaveHeatingSystem(): string
    {
        return "Starting on heating system";
    }

    private function loadingDeFreezingProgram(): string
    {
        return "Loading program {$this->program}";
    }

    private function setTimer(): string
    {
        return "Setting de-freezing time to {$this->time}";
    }
}