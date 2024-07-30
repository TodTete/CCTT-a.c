<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\UserController;

$view = isset($_GET['view']) ? $_GET['view'] : 'Home';

if ($view === 'LoginPage') {
    $controller = new UserController();
    $controller->showLoginPage();
} else {
    $controller = new HomeController();
    $controller->index($view);
}

