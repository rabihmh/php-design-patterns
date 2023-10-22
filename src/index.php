<?php

use App\OOP\PHP\TCPClient;

require_once __DIR__ . '/../vendor/autoload.php';

$http = new TCPClient("https://rabihmh.tech", 8, 8000);
var_dump($http->connect());
var_dump($http->call('/projects'));
var_dump($http->terminate());
