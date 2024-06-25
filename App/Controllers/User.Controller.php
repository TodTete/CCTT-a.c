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
        session_start();
        $whitelist = ['username', 'password'];

        foreach ($data as $key => $value) {
            if (!in_array($key, $whitelist)) {
                unset($data[$key]);
            }
        }

        $username = filter_var($data['username'] ?? null);
        $password = $data['password'] ?? null;

        if ($username === null || $password === null) {
            echo json_encode(["status" => "error", "message" => "Usuario o contraseña incorrectos."]);
            return;
        }

        $usuarioExiste = $this->user->iniciarSesion($username);

        if ($usuarioExiste && is_array($usuarioExiste) && isset($usuarioExiste['password'])) {
            $hashedPassword = $usuarioExiste['password']; 

            if (password_verify($password, $hashedPassword)) {
                $_SESSION['user_logged_in'] = true; 
                echo json_encode(["status" => "success"]);
                return;
            }
        }

        echo json_encode(["status" => "error", "message" => "Usuario o contraseña incorrectos."]);
    }
}
?>