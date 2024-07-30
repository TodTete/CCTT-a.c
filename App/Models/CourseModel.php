<?php

namespace App\Models;

use PDO;
use PDOException;

class CourseModel
{
    private $conn;

    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

   public function getAllCourses(): array
{
    try {
        $query = "SELECT * FROM courses WHERE hidden = 0";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("Error en getAllCourses: " . $e->getMessage());
        return [];
    }
}

}
