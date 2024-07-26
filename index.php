<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controllers\HomeController;

$view = isset($_GET['view']) ? $_GET['view'] : 'Home';

$controller = new HomeController();
$controller->index($view);
