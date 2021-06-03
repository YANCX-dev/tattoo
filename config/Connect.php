<?php

namespace App\config;

use PDO;

class Connect
{
    public static function getConnect($conn)
    {

        return new PDO(
            "mysql:host=" . $conn["host"] . ";dbname=" . $conn["dbname"],
            $conn["login"],
            $conn["password"],
            $conn["options"]);
    }

}