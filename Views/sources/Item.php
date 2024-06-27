<?php 
require_once __DIR__ . '/../App/Controllers/Generic.Controller.php';

$view = isset($_GET['view']) ? $_GET['view'] : 'courses';

switch ($view) {
    case 'courses':
        $controller = new GenericController('courses');
        break;
    case 'teachers':
        $controller = new GenericController('teachers');
        break;
    case 'graduations':
        $controller = new GenericController('graduations');
        break;
    default:
        echo "Vista no válida.";
        exit;
}

$data = $controller->getAllItems();
?>
