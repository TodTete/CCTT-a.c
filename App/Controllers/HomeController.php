<?php

namespace App\Controllers;

class HomeController
{
    public function index(string $view = 'Home')
    {
        switch ($view) {
            case 'Courses':
                $data = ['titulo' => 'Cursos'];
                $this->loadView('Courses', $data);
                break;
            
            case 'Teachers':
                $data = ['titulo' => 'Docentes'];
                $this->loadView('teachers', $data);
                break;
            
            case 'Graduations':
                $data = ['titulo' => 'Graduaciones'];
                $this->loadView('graduations', $data);
                break;
            
            case 'Home':
            default:
                $data = ['titulo' => 'Inicio'];
                $this->loadView('home', $data);
                break;
        }
    }

    private function loadView(string $view, array $data = [])
    {
        extract($data);
        require_once __DIR__ . "/../../Views/{$view}.php";
    }
}

