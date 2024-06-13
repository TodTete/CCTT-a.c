<?php

class Course
{
    private $conn;
    private $table_name = "courses_admin";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getCourses()
    {
        $query = "SELECT clue, name_course, description_course FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateCourse($clue, $name, $description)
    {
        $query = "UPDATE " . $this->table_name . " SET name_course = ?, description_course = ? WHERE clue = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$name, $description, $clue]);
    }

    public function hideCourse($clue)
    {
        $query = "UPDATE " . $this->table_name . " SET hidden = 1 WHERE clue = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$clue]);
    }
}
