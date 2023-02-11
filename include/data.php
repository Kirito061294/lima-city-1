
define ( 'MYSQL_HOST', 'localhost' );

define ( 'MYSQL_BENUTZER', 'USER348875_abcd' );
define ( 'MYSQL_KENNWORT', 'OeyMNQyPklNN5j0fL8RzjgwJADITSbdw' );

define ( 'MYSQL_DATENBANK', 'db_348875_3' );
<?php

class Connection {

    protected static $instance;

    private static $dsn = 'mysql:host=localhost;dbname=db_348875_3';

    private static $username = 'USER348875_abcd';

    private static $password = 'OeyMNQyPklNN5j0fL8RzjgwJADITSbdw';

    private function __construct() {
        try {
            self::$instance = new PDO(self::$dsn, self::$username, self::$password);
        } catch (PDOException $e) {
            echo "MySql Connection Error: " . $e->getMessage();
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