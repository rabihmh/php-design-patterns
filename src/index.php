<?php

use App\OOP\PHP\SOLID\OCP\Bus;
use App\OOP\PHP\SOLID\OCP\Driver;
use App\OOP\PHP\SOLID\OCP\MoveOnTheRoads;
use App\OOP\PHP\SOLID\OCP\Route;
use App\OOP\PHP\SOLID\OCP\Trip;

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
$bus->setMovable(new MoveOnTheRoads());
$trip = new Trip($bus, 'R210', 5, 120);
$trip->move();
