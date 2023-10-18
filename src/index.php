<?php

use App\OOP\PHP\BMW;
use App\OOP\PHP\Mercedes;
use App\OOP\PHP\Order;

require_once __DIR__ . '/../vendor/autoload.php';

$bmw = new BMW(320, 2, "Front", "Black");
$mercedes = new Mercedes(335, 4, "Front", "Red");
$app = new Order('Tripoli', 'Beirut', 500);

var_dump($app->deliverOrder($bmw));
var_dump($app->deliverOrder($mercedes));