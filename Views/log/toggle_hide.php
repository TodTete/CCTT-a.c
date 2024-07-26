<?php

use App\Controllers\GenericController;

header('Content-Type: application/json');

if (isset($_GET['clue'])) {
    $clue = $_GET['clue'];
    $controller = new GenericController("courses");
    $success = $controller->toggleHide($clue);
    error_log("Estado de visibilidad del curso $clue ha sido cambiado a $success.");
    echo json_encode(['success' => $success]);
} else {
    error_log("Error: CLUE no proporcionado.");
    echo json_encode(['success' => false]);
}
