<?php

namespace App\Controllers;

class HomeController
{
    public function index(string $view = 'Home')
    {
        switch ($view) {
            case 'courses':
                $data = [
                    'titulo' => 'Cursos'
                ];
                $this->loadView('courses', $data);
                break;

            case 'Teachers':
                $data = [
                    'titulo' => 'Docentes'
                ];
                $this->loadView('teachers', $data);
                break;

            case 'Graduation':
                $data = [
                    'titulo' => 'Graduaciones'
                ];
                $this->loadView('graduations', $data);
                break;

            case 'Home':
            default:
                $data = [
                    'titulo' => 'Inicio'
                ];
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

