<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{
    private static $conn;

    public static function getConnection()
    {
        if (self::$conn === null) {
            try {
                $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
                self::$conn = new PDO($dsn, DB_USER, DB_PASS);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                error_log("Error de conexión: " . $e->getMessage());
                die("Error de conexión. Por favor, intente más tarde.");
            }
        }
        return self::$conn;
    }
}
