<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";


// Given password
$password = $_POST["password"];

// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if (isset($_POST["subReg"])) {
    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        $_SESSION["error"]["reg"] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    } else {

        $email = $_POST["email"];
        $login = $_POST["login"];
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeatPassword"];

        $newUser = $dataReg->Register($email, $login, $password, $repeatPassword);
        if ($newUser) {
            header("Location: /");
        } else {
            $_SESSION["error"]["reg"] = "Registration error!Try again!";
        }


    }
}


require_once $_SERVER["DOCUMENT_ROOT"] . "/routes/register/registration.php";
