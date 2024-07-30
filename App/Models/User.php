<?php

namespace App\Models;

use PDO;
use PDOException;

class User
{
    private $conn;
    private $table_name = "users_admin";

    public $id;
    public $username;
    public $password;

    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

    public function iniciarSesion(string $username): ?array
    {
        try {
            $query = "SELECT * FROM " . $this->table_name . " WHERE username = :username";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result ?: null;
        } catch (PDOException $e) {
            error_log("Error en iniciarSesion: " . $e->getMessage());
            return null;
        }
    }
}
