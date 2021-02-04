<?php
include_once './util.php';
class DBConnector
{
    protected $pdo;
    function __construct()
    {
        $dsn = "mysql:host=" . Util::$SERVER_NAME . ";dbname=" . Util::$DB_NAME . "";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,              PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
    }
}
