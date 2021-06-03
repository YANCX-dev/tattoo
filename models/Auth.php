<?php


namespace App\models;

use PDO;

class Auth
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }

    public function auth($login, $password)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE login=:login");
        $stmt->execute([
            "login" => $login
        ]);
        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password,$user["password"])) {
                return $user;
            }
        }
        return false;
    }


}