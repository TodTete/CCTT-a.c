<?php

class DetailsModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAll($table) {
        $stmt = $this->conn->prepare("SELECT * FROM " . $table);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($table, $id) {
        $stmt = $this->conn->prepare("SELECT * FROM " . $table . " WHERE clue = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($table, $id, $name, $description, $picture) {
        $stmt = $this->conn->prepare("UPDATE " . $table . " SET name = :name, description = :description, picture = :picture WHERE clue = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
?>
