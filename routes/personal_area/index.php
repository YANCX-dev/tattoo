<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";
if($_SESSION["auth"] == false){
    header("Location: /");
}
$login = $_SESSION['login'];

$user=$dataInfo->getUserdata($login);
var_dump($user);



























require_once $_SERVER["DOCUMENT_ROOT"] . "/routes/personal_area/personalArea.php";
