<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Helpers/css/lg.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../Helpers/css/bootstrap.css">
    <script src="../../Helpers/js/lg.js"></script>
    <title>Iniciar Sesión</title>
</head>

<?php
require_once __DIR__.'/../../App/controllers/User.Controller.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController = new UserController();
    $result = $userController->login($_POST);
    
    if ($result === null) {
        header('Location: /dashboard.php');
        exit();
    } else {
        echo $result;
    }
}
?>
