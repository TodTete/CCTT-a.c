<?php

namespace App\Middleware;

use PDO;
use PDOException;

class Mild
{
    public static function getConnection()
    {
        require_once __DIR__ . '/Config/config.php';

        // Usa las constantes definidas en config.php
        $host = DB_HOST;
        $dbname = DB_NAME;
        $username = DB_USER;
        $password = DB_PASS;

        try {
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            error_log("Error en la conexión a la base de datos: " . $e->getMessage());
            return null;
        }
    }
}
