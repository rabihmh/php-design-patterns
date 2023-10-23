<?php

use App\OOP\PHP\SOLID\SRP\Bus;
use App\OOP\PHP\SOLID\SRP\Driver;
use App\OOP\PHP\SOLID\SRP\Route;

require_once __DIR__ . '/../vendor/autoload.php';
$rabih = new Driver("Rabih Mahmoud", 23, "SA7468566", "Tripoli LB");
$route80 = new Route("Tripoli", "Beirut", 80);
$route90 = new Route("Beirut", "Saida", 30);
$bus = new Bus(201);
$bus->setColor("red");
$bus->setMaxSpeed(130);
$bus->setNumberOfPassengers(30);
$bus->setDriver($rabih);
$bus->addRoute($route80);
$bus->addRoute($route90);
$bus->move();