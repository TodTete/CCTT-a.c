<?php
require_once '../../Models/Details.Model.php';
require_once '../../Middleware/Mild.Middleware.php';

class UpdateDetailsController {
    private $conn;
    private $model;

    public function __construct() {
        $this->conn = Mild::handle();
        $this->model = new DetailsModel($this->conn);
    }

    public function getAllDetails($view) {
        $table = $this->getTable($view);
        return $this->model->getAll($table);
    }

    public function getDetailById($view, $id) {
        $table = $this->getTable($view);
        return $this->model->getById($table, $id);
    }

    public function updateDetail($view, $data) {
        $table = $this->getTable($view);
        $id = filter_var($data['id'], FILTER_VALIDATE_INT);
        $name = filter_var($data['name']);
        $description = filter_var($data['description']);
        $picture = filter_var($data['picture']);

        if ($id === false || $name === false || $description === false || $picture === false) {
            return "Error en los datos proporcionados.";
        }

        return $this->model->update($table, $id, $name, $description, $picture);
    }

    private function getTable($view) {
        switch ($view) {
            case 'teachers':
                return 'teachers';
            case 'graduations':
                return 'graduations';
            default:
                return 'courses';
        }
    }
}
?>
