<?php

use Root\Html\classes\BySmsDelivery;
use Root\Html\classes\Logger;
use Root\Html\classes\RawFormat;

require_once __DIR__ . '/vendor/autoload.php';

$logger = new Logger(new RawFormat(), new BySmsDelivery());
$logger->log('Emergency error! Please fix me!');