<?php

namespace App\Controllers;

use App\Models\User;
use App\Middleware\Mild;

class UserController
{
    private $user;

    public function __construct()
    {
        $conn = Mild::getConnection();
        $this->user = new User($conn);
    }

    public function login(array $data)
    {
        session_start();
    
        $username = $data['username'] ?? '';
        $password = $data['password'] ?? '';
    
        if (empty($username) || empty($password)) {
            echo json_encode(["status" => "error", "message" => "Usuario o contraseña incorrectos."]);
            return;
        }
    
        $usuarioExiste = $this->user->iniciarSesion($username);
    
        if ($usuarioExiste && password_verify($password, $usuarioExiste['password'])) {
            $_SESSION['user_logged_in'] = true;
            echo json_encode(["status" => "success", "redirect_url" => "/cctt-a.c/Views/Pages/dashboard.php"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Usuario o contraseña incorrectos."]);
        }
    }
    

    public function showLoginPage()
    {
        $data = [
            'titulo' => 'Login'
        ];
        $this->loadView('loginpage', $data);
    }

    private function loadView(string $view, array $data = [])
    {
        extract($data);
        require_once __DIR__ . "/../../Views/Pages/{$view}.php";
    }
}
