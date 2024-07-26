<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Middleware\Mild;

class CoursesController
{
    private $model;

    public function __construct()
    {
        $pdo = Mild::getConnection();
        $this->model = new CourseModel($pdo);
    }

    public function getCourses()
    {
        return $this->model->getAllCourses();
    }
}
