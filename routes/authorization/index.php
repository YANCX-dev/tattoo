<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

if(isset($_POST["subAuth"])){
$login=$_POST["login"];
$password = $_POST["password"];

$user = $dataAuth->Auth($login,$password);

if($user == true){
    $_SESSION["user"] = json_encode($user,JSON_UNESCAPED_UNICODE);
    $_SESSION["auth"] = true;
    $_SESSION["login"] = $login;
    header("Location: /");
}
else{
    $_SESSION["error"]["auth"] = "Login or password error!Try again!";
}
}

if($_GET["exit"]){
    session_destroy();
    session_unset();
}




























require_once $_SERVER["DOCUMENT_ROOT"] . "/routes/authorization/auth.php";