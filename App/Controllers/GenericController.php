<?php

namespace App\Controllers;

use App\Models\GenericModel;
use App\Middleware\Mild;

class GenericController
{
    private $model;

    public function __construct(string $table_name)
    {
        $this->model = new GenericModel(Mild::getConnection(), $table_name);
    }

    public function getAllItems(): array
    {
        return $this->model->getAllItems();
    }

    public function toggleHide(string $clue): bool
    {
        return $this->model->toggleHide($clue);
    }
}
