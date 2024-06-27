<?php

require_once '../../Middleware/Mild.Middleware.php';
require_once '../../Models/Generic.Model.php';

class GenericController
{
    private $model;
    private $conn;

    public function __construct($table_name)
    {
        $this->conn = Mild::handle();
        $this->model = new GenericModel($this->conn, $table_name);
    }

    public function getAllItems()
    {
        return $this->model->getAllItems();
    }
}

?>
