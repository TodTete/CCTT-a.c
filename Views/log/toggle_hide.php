<?php

require_once "../../vendor/autoload.php";

use App\Controllers\GenericController;

header('Content-Type: application/json');

if (isset($_GET['clue']) && isset($_GET['view'])) {
    $clue = $_GET['clue'];
    $view = $_GET['view'];
    $controller = new GenericController($view);
    $success = $controller->toggleHide($clue);
    error_log("Estado de visibilidad de $view con clue $clue ha sido cambiado a $success.");
    echo json_encode(['success' => $success]);
} else {
    error_log("Error: CLUE o VIEW no proporcionado.");
    echo json_encode(['success' => false]);
}
