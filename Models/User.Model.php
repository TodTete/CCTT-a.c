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

    public function iniciarSesion($username, $password)
    {
        $query = "SELECT id, username FROM " . $this->table_name . " WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username]);

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        return false;
    }

    public function verificarPassword($idUsuario, $password)
    {
        $query = "SELECT password FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$idUsuario]);

        $contrasenia = $stmt->fetch(PDO::FETCH_ASSOC)['password'];

        $verifica = password_verify($password, $contrasenia);
        
        return $verifica;
    }
}
