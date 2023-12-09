<?php

namespace Root\Html\classes;

use Root\Html\Interfaces\IDelivery;

class ToConsoleDelivery implements IDelivery
{
    public function delivery(string $massage): void
    {
        echo "Вывод формата ($massage) в консоль";
    }
}