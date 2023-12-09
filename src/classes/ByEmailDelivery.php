<?php

namespace Root\Html\classes;

use Root\Html\Interfaces\IDelivery;

class ByEmailDelivery implements IDelivery
{
    public function delivery(string $massage): void
    {
        echo "Вывод формата ($massage) по имейл";
    }
}