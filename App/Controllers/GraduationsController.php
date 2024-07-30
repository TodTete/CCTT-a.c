<?php

namespace App\Controllers;

use App\Models\GraduationModel;
use App\Middleware\Mild;

class GraduationController
{
    private $model;

    public function __construct()
    {
        $pdo = Mild::getConnection();
        $this->model = new GraduationModel($pdo);
    }

    public function getGraduation()
    {
        return $this->model->getAllGraduation();
    }
}
