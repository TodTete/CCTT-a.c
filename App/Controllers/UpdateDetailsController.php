<?php

namespace App\Controllers;

use App\Models\DetailsModel;
use App\Middleware\Mild;

class UpdateDetailsController
{
    private $model;

    public function __construct()
    {
        $conn = Mild::handle();
        $this->model = new DetailsModel($conn);
    }

    public function getAllDetails(string $view): array
    {
        $table = $this->getTable($view);
        return $this->model->getAll($table);
    }

    public function getDetailById(string $view, int $id): ?array
    {
        $table = $this->getTable($view);
        return $this->model->getById($table, $id);
    }

    public function updateDetail(string $view, array $data): string
    {
        $table = $this->getTable($view);
        $id = filter_var($data['id'], FILTER_VALIDATE_INT);
        $name = filter_var($data['name']);
        $description = filter_var($data['description']);
        $picture = filter_var($data['picture']);

        if ($id === false || empty($name) || empty($description) || empty($picture)) {
            return "Error en los datos proporcionados.";
        }

        return $this->model->update($table, $id, $name, $description, $picture);
    }

    private function getTable(string $view): string
    {
        $tables = [
            'teachers' => 'teachers',
            'graduations' => 'graduations',
            'courses' => 'courses',
        ];

        return $tables[$view] ?? 'courses';
    }
}
