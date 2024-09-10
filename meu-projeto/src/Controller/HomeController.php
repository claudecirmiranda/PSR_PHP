<?php

namespace App\Controller;

use App\Model\User;

class HomeController
{
    public function index(): void
    {
        $user = new User();
        $user->setName('John Doe');
        require __DIR__ . '/../View/home.php';
    }
}