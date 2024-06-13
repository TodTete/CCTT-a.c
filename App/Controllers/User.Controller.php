<?php

require_once '../../Models/User.Model.php';
require_once '../../Middleware/Mild.Middleware.php';

class UserController
{
    private $conn;
    private $user;

    public function __construct()
    {
        $this->conn = Mild::handle();
        $this->user = new User($this->conn);
    }

    public function login($data)
    {
        $whitelist = ['username', 'password'];

        foreach ($data as $key => $value) {
            if (!in_array($key, $whitelist)) {
                unset($data[$key]);
            }
        }

        $username = filter_var($data['username'] ?? null, FILTER_SANITIZE_STRING);
        $password = $data['password'] ?? null;

        if ($username === null || $password === null) {
            return "Error de autenticación. Usuario o contraseña incorrectos.";
        }

        // Verificar si el usuario existe
        $usuarioExiste = $this->user->iniciarSesion($username);

        // Comparar la contraseña ingresada con "admin1234"
        if ($usuarioExiste && $password === "admin1234") {
            header('Location: dashboard.php');
            exit();
        }

        return "Error de autenticación. Usuario o contraseña incorrectos.";
    }
}
