<?php
require_once __DIR__ . '/../vendor/autoload.php';
class ValueObject {
    private int $red;
    private int $green;
    private int $blue;

    public function __construct($red, $green, $blue) {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function setRed($red): void
    {
        $this->validateColorValue($red);
        $this->red = $red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function setGreen($green): void
    {
        $this->validateColorValue($green);
        $this->green = $green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    public function setBlue($blue): void
    {
        $this->validateColorValue($blue);
        $this->blue = $blue;
    }

    private function validateColorValue($value): void
    {
        if ($value < 0 || $value > 255) {
            throw new InvalidArgumentException("Не валидный код цвета!");
        }
    }

    public static function equals(ValueObject ...$colors): bool
    {
        $firstColor = array_shift($colors);

        foreach ($colors as $color) {
            if (
                $firstColor->getRed() != $color->getRed() ||
                $firstColor->getGreen() != $color->getGreen() ||
                $firstColor->getBlue() != $color->getBlue()
            ) {
                return false;
            }
        }

        return true;
    }

    public static function random(): ValueObject
    {
        $red = rand(0, 255);
        $green = rand(0, 255);
        $blue = rand(0, 255);

        return new self($red, $green, $blue);
    }

    public static function mix(ValueObject $oneColor, ValueObject $twoColor, ValueObject $threeColor): ValueObject
    {
        $red = ($oneColor->getRed() + $twoColor->getRed() + $threeColor->getRed()) / 3;
        $green = ($oneColor->getGreen() + $twoColor->getGreen() + $threeColor->getGreen()) / 3;
        $blue = ($oneColor->getBlue() + $twoColor->getBlue() + $threeColor->getBlue()) / 3;

        return new self((int)$red, (int)$green, (int)$blue);
    }
}