<?php


namespace App\models;

use PDO;

class Info
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getUserdata($login){
        $stmt=$this->pdo->prepare("SELECT u.id,u.email,u.login,r.name 
        FROM user as u INNER JOIN role r on u.role = r.roleID WHERE u.login =:login");

        $stmt->execute([
            "login"=>$login,
        ]);

       return $stmt->fetch();
    }

}