<?php

namespace App\Models;

use PDO;
use PDOException;

class GenericModel
{
    private $conn;
    private $table_name;

    public function __construct(PDO $db, string $table_name)
    {
        $this->conn = $db;
        $this->table_name = $table_name;
    }

    public function getAllItems(): array
    {
        try {
            $query = "SELECT clue, name, description, picture, hidden FROM " . $this->table_name;
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en getAllItems: " . $e->getMessage());
            return [];
        }
    }

    public function toggleHide(string $clue): bool
    {
        try {
            $sql = "SELECT hidden FROM " . $this->table_name . " WHERE clue = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$clue]);
            $hidden = $stmt->fetchColumn();

            if ($hidden === false) {
                return false;
            }

            $newHidden = !$hidden;

            $sql = "UPDATE " . $this->table_name . " SET hidden = ? WHERE clue = ?";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$newHidden, $clue]);
        } catch (PDOException $e) {
            error_log("Error en toggleHide: " . $e->getMessage());
            return false;
        }
    }
}
