<?php

declare(strict_types=1);

namespace Pattern\Solid\Core;

use PDO;
use PDOException;

class Database
{
    public static PDO $database;

    public function __construct()
    {
        if (empty(self::$database)) {
            self::connect();
        }
    }

    public static function connect(): PDO
    {
        try {
            $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];
            self::$database = new PDO('mysql:dbname=demo_db;host=localhost', 'root', '', $options);
            self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$database->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return self::$database;
        } catch (PDOException $e) {
            http_response_code(500);

            dd($e);
        }
    }

}
