<?php

use Root\Html\Test;

require_once __DIR__ . '/vendor/autoload.php';

$sum = new Test();
d($sum->getSum($sum->numberOne(), $sum->numberTwo(), $sum->numberThree()));