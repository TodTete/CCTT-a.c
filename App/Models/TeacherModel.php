<?php

namespace App\Models;

use PDO;
use PDOException;

class TeacherModel
{
    private $conn;

    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

    public function getAllTeachers(): array
    {
        try {
            $query = "SELECT * FROM teachers";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en getAllTeachers: " . $e->getMessage());
            return [];
        }
    }
}
