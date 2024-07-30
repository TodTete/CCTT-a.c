<?php

namespace App\Models;

use PDO;
use PDOException;

class GraduationModel
{
    private $conn;

    private $table = "graduations";

    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

    public function getAllGraduation(): array
    {
        try {
            $query = "SELECT * FROM ". $this->table . " WHERE hidden = 0";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en getAllGraduation: " . $e->getMessage());
            return [];
        }
    }
}
