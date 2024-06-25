<?php
require_once __DIR__.'/../../App/Controllers/User.Controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController = new UserController();
    $userController->login($_POST);
}
?>