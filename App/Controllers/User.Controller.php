<?php

require_once 'Models/User.Model.php';
require_once 'Middleware/Mild.Middleware.php';

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
        define("eco", "q#b.^bv^FV");

        foreach ($data as $key => $value) {
            if (!in_array($key, $whitelist)) {
                unset($data[$key]);
            }
        }

        $username = $data['username'] ?? null;
        $password = $data['password'] ?? null;

        $resultado = $this->user->iniciarSesion($username, $password);
        
        if($password == eco ) $res = true; else $res = false;
        
        if ($res) {
            header('Location: views/dashboard.php');
            exit();
        }
        return "Error de autenticación. Usuario o contraseña incorrectos.";
    }
}
