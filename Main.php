<?php

require "ChocolateFactory.php";
require "Sweets.php";

use ChocolateFactory\ChocolateFactory;

$factory = new ChocolateFactory();
$factory->orderSnack("milka", "молочный", ["фундук"]);
