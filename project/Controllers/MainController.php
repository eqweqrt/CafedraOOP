<?php

namespace Controllers;

class MainController
{
    public function main()
    {
        include __DIR__ . '/../templates/main.php';
    }

    public function sayHello(string $name)
    {
        echo 'Здравствуйте, ' . $name;
    }

    public function sayBye(string $name)
    {
        echo 'Досвидания, ' . $name;
    }
}