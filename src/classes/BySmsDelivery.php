<?php

namespace Root\Html\classes;

use Root\Html\Interfaces\IDelivery;

class BySmsDelivery implements IDelivery
{
    public function delivery(string $massage): void
    {
        echo "Вывод формата ($massage) в смс";
    }
}