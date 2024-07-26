<?php

namespace App\Models;

use PDO;
use PDOException;

class DetailsModel
{
    private $conn;

    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

    public function getAll(string $table): array
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM " . $table);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error en getAll: " . $e->getMessage());
            return [];
        }
    }

    public function getById(string $table, int $id): ?array
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM " . $table . " WHERE clue = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
        } catch (PDOException $e) {
            error_log("Error en getById: " . $e->getMessage());
            return null;
        }
    }

    public function update(string $table, int $id, string $name, string $description, string $picture): bool
    {
        try {
            $stmt = $this->conn->prepare("UPDATE " . $table . " SET name = :name, description = :description, picture = :picture WHERE clue = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error en update: " . $e->getMessage());
            return false;
        }
    }
}
