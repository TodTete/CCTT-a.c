<?php

require_once 'config/database.php';

class Mild {
    public static function handle() {
        $database = new Database();
        return $database->getConnection();
    }
}
?>
