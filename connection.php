<?php
class DataBase
{
    private static $instance = NULl;
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            try {
                $servername = $_ENV['DB_HOST'];
                $username = $_ENV['DB_USER'];
                $password = $_ENV['DB_PASSWORD'];
                $dbname = $_ENV['DB_NAME'];
                self::$instance = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
                self::$instance->exec("SET NAMES 'utf8'");
            } catch (PDOException $ex) {
                die($ex->getMessage());
            }
        }
        return self::$instance;
    }
}
