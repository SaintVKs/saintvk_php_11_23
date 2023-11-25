<?php

namespace Root\Html;

require_once __DIR__ . '/../vendor/autoload.php';
class Test
{
    use Trait1, Trait2, Trait3 {
        Trait1::Test insteadof Trait2;
        Trait2::Test insteadof Trait3;
        Trait1::Test as numberOne;
        Trait2::Test as numberTwo;
        Trait3::Test as numberThree;
    }
    public function getSum($one, $two, $three): int
    {
       return $one + $two + $three;
    }
}