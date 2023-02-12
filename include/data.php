<?php

class Connection {

    protected static $instance;

    private static $dsn = 'mysql:host=localhost;port=8889;dbname=db_348875_3';
    private static $username = 'USER348875_abcd';
    private static $password = 'OeyMNQyPklNN5j0fL8RzjgwJADITSbdw';

    private function __construct() {
        try {
            self::$instance = new PDO(self::$dsn, self::$username, self::$password);
        } catch (PDOException $e) {
            echo "MySql Connection Error: " . $e->getMessage().PHP_EOL;
        }
    }
    public static function getInstance() {
        if (!self::$instance) {
            new Connection();
        }
        return self::$instance;
    }
}

?>