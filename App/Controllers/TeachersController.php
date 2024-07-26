<?php

namespace App\Controllers;

use App\Models\TeacherModel;
use App\Middleware\Mild;

class TeachersController
{
    private $model;

    public function __construct()
    {
        $pdo = Mild::getConnection();
        $this->model = new TeacherModel($pdo);
    }

    public function getTeachers()
    {
        return $this->model->getAllTeachers();
    }
}
