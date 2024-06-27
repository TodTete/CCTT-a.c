<?php

class GenericModel
{
    private $conn;
    private $table_name;

    public function __construct($db, $table_name)
    {
        $this->conn = $db;
        $this->table_name = $table_name;
    }

    public function getAllItems()
    {
        $query = "SELECT clue, name, description, picture FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
