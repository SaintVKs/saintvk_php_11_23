<?php

namespace Root\Html\classes;

use Root\Html\Interfaces\IFormat;

class RawFormat implements IFormat
{
    public function format(string $massage): string
    {
        return $massage;
    }
}