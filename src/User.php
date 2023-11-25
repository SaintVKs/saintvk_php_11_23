<?php

namespace Root\Html;

use Exception;

class User
{
    private string $name;
    private int $age;
    private string $email;

    public function __construct($name, $age, $email)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setEmail($email);
    }
    private function setName($name): void
    {
        $this->name = $name;
    }
    private function setAge($age): void
    {
        $this->age = $age;
    }
    private function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getAll(): array
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email
        ];
    }

    public function __call($name, $arguments)
    {
        try {
            if (method_exists($this, $name)) {
                call_user_func_array([$this, $name], $arguments);
            } else {
                throw new Exception("Такого метода $name не существует!");
            }
        } catch (Exception $e) {
            echo 'Ошибка: ' . $e->getMessage();
        }
    }
}