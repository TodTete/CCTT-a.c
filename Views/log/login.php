<?php

require_once "../../vendor/autoload.php";

use App\Controllers\UserController;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController = new UserController();

    $userController->login($_POST);
}
