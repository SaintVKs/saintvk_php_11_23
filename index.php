<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/classes/ValueObject.php';

$color1 = new ValueObject(100, 150, 200);
$color2 = new ValueObject(100, 150, 200);
$color3 = new ValueObject(150, 200, 250);

// Получение значения red с геттера
//dd($color1->getRed());

// Использование сеттера green
//$color2->setGreen(50);

// Создание случайного цвета
//$randomColor = ValueObject::random();
//dd($randomColor);

// Создание нового цвета при смешивании
//$mixedColor = ValueObject::mix($color1, $color2, $color3);
//dd($mixedColor);

// Сравнение объектов
$colorComparison = ValueObject::equals($color1, $color2);
dd($colorComparison);