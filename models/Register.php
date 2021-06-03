<?php

namespace App\models;

use PDO;

class Register
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function Register($email, $login, $password, $repeatPassword)
    {

        $checkEmail = $this->pdo->prepare("SELECT * FROM user WHERE email=:email");
        $checkEmail->execute([
            ":email" => $email,
        ]);

        $freeEmail = $checkEmail->fetchAll();

        $checkLogin = $this->pdo->prepare("SELECT * FROM user WHERE login=:login");
        $checkLogin->execute([
            ":login" => $login,
        ]);

        $freeLog = $checkLogin->fetchAll();

        if($freeLog && $freeEmail){
            $_SESSION["error"]["reg"] = "Such email or login is already in use";
        }

        if (!$freeLog && !$freeEmail) {
            if ($password === $repeatPassword) {
                $stmt = $this->pdo->prepare("INSERT INTO user (email,login,password) values (:email,:login,:password)");

                $stmt->execute([
                    ":email" => $email,
                    ":login" => $login,
                    ":password" => password_hash($password, PASSWORD_BCRYPT),
                ]);
                return true;
            }

        }
        return false;
    }


}