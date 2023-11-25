<?php

use Root\Html\User;

require_once __DIR__ . '/vendor/autoload.php';

$account = new User('Алексей', 28, '12345678@gmail.com');

//Проверка несуществующего метода.
//$account->setNumber('080031031293');

//Проверка существуещего метода.
//$account->setName('Владислав');
d($account->getAll());
