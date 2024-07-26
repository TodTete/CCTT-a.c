<?php

namespace App\Controllers;

use App\Models\User;
use App\Middleware\Mild;

class UserController
{
    private $user;

    public function __construct()
    {
        $conn = Mild::handle();
        $this->user = new User($conn);
    }

    public function login(array $data)
    {
        session_start();

        $username = filter_var($data['username'] ?? '');
        $password = $data['password'] ?? '';

        if (empty($username) || empty($password)) {
            echo json_encode(["status" => "error", "message" => "Usuario o contraseña incorrectos."]);
            return;
        }

        $usuarioExiste = $this->user->iniciarSesion($username);

        if ($usuarioExiste && password_verify($password, $usuarioExiste['password'])) {
            $_SESSION['user_logged_in'] = true;
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Usuario o contraseña incorrectos."]);
        }
    }
}
