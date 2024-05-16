<?php

require_once "vendor/autoload.php";

use Egor\Chocolate\ChocolateFactory;

$factory = new ChocolateFactory();
$factory->orderSnack("milka", "молочный", ["фундук"]);
