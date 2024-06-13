<?php

class Teacher
{
    private $conn;
    private $table_name = "teachers_admin";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getTeachers()
    {
        $query = "SELECT clue, name_teachers, data, picture FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
