<?php

namespace App\OOP\PHP\Relationship\Composition;

class ComputerMachine
{
    private CPU $cpu;
    private RAM $ram;

    /**
     * @param CPU $cpu
     * @param RAM $ram
     */
    public function __construct(CPU $cpu, RAM $ram)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
    }

    public function dashboard():string
    {
        return "My Machine's speed is {$this->cpu->getSpeed()} GHZ and a RAM of {$this->ram->getSize()}";
    }
}