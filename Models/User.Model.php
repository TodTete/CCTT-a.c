<?php

class User
{
    private $conn;
    private $table_name = "users_admin";

    public $id;
    public $username;
    public $password;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function iniciarSesion($username)
    {
        $query = "SELECT id, username FROM " . $this->table_name . " WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username]);

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return $resultado ? true : false;
    }
}
