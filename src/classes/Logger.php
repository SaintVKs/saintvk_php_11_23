<?php

namespace Root\Html\classes;

use Root\Html\Interfaces\IDelivery;
use Root\Html\Interfaces\IFormat;

class Logger
{
    public function __construct(protected IFormat $format, protected IDelivery $delivery)
    {
    }

    public function log($string): void
    {
        $this->delivery->delivery($this->format->format($string));
    }
}