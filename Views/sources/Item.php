<?php

use App\Controllers\GenericController;

session_start();

if (!isset($_SESSION['user_logged_in'])) {
    header('Location: LoginPage.php');
    exit();
}

$view = $_GET['view'] ?? 'courses';

switch ($view) {
    case 'teachers':
        $controller = new GenericController("teachers");
        break;
    case 'graduations':
        $controller = new GenericController("graduations");
        break;
    default:
        $controller = new GenericController("courses");
        break;
}

$data = $controller->getAllItems();

include_once 'add.php';
