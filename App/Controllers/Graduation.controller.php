<?php

require_once '../../Models/Graduations.Model.php';
require_once '../../Middleware/Mild.Middleware.php';

class GraduationController
{
    private $graduation;
    private $conn;

    public function __construct()
    {
        $this->conn = Mild::handle();
        $this->graduation = new Graduation($this->conn);
    }

    public function getAllGraduations()
    {
        return $this->graduation->getGraduations();
    }

    public function updateGraduation($clue, $name, $description)
    {
        return $this->graduation->updateGraduation($clue, $name, $description);
    }

    public function hideGraduation($clue)
    {
        return $this->graduation->hideGraduation($clue);
    }
}
