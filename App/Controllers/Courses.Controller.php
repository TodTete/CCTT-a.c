<?php

require_once '../../Models/Courses.Model.php';
require_once '../../Middleware/Mild.Middleware.php';

class CourseController
{
    private $course;
    private $conn;

    public function __construct()
    {
        $this->conn = Mild::handle();
        $this->course = new Course($this->conn);
    }

    public function getAllCourses()
    {
        return $this->course->getCourses();
    }

    public function updateCourse($clue, $name, $description)
    {
        return $this->course->updateCourse($clue, $name, $description);
    }

    public function hideCourse($clue)
    {
        return $this->course->hideCourse($clue);
    }
}
