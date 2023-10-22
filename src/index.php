<?php

use App\OOP\PHP\Relationship\Composition\ComputerMachine;
use App\OOP\PHP\Relationship\Composition\CPU;
use App\OOP\PHP\Relationship\Composition\House;
use App\OOP\PHP\Relationship\Composition\RAM;
use App\OOP\PHP\Relationship\Composition\Room;

require_once __DIR__ . '/../vendor/autoload.php';

$room1 = new Room('White', 20);
$room2 = new Room("Black", 25);
$room3 = new Room("LightBlue", 30);

$house = new House([$room1, $room2, $room3]);
$cpu = new CPU(3.6);
$ram = new RAM("8");
$computer = new ComputerMachine($cpu, $ram);
var_dump($computer->dashboard());