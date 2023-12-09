<?php

namespace Root\Html\classes;

use Root\Html\Interfaces\IFormat;

class WithDateFormat implements IFormat
{
    public function format(string $massage): string
    {
        return date('Y-m-d H:i:s') . $massage;
    }
}