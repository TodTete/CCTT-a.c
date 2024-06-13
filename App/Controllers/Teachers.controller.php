<?php

require_once '../../Models/Teachers.Model.php';
require_once '../../Middleware/Mild.Middleware.php';

class TeacherController
{
    private $teacher;
    private $conn;

    public function __construct()
    {
        $this->conn = Mild::handle();
        $this->teacher = new Teacher($this->conn);
    }

    public function getAllTeachers()
    {
        return $this->teacher->getTeachers();
    }
}
?>
