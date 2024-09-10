<?php

namespace Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\HomeController;

class HomeControllerTest extends TestCase
{
    public function testIndex(): void
    {
        $controller = new HomeController();
        $this->expectOutputRegex('/Welcome, John Doe/');
        $controller->index();
    }
}