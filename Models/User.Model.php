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

    public function iniciarSesion($username) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        } else {
            return false; 
        }
    }
}
?>
